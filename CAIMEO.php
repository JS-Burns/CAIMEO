<?php

require "COR_SSY.php";

// require "SEC_SSY.php";

// require "YMK_SSY.php";

// require "VIZLEARN.php";

// require "ETH.PROTOC.php";

require "FEEDFOR1.php";

// require "COG_49.php";

// require "DEDUC_49.php";

// require "JKS_49.php";

// require "REASO_49.php";

// require "JPN_P1.php";

// require "JPN_P2.php";


class AI
{
    public $_dataParsed = false;
    protected $noRandom;
    protected $capitalizeFirstLetter = true;
    protected $debug = false;
    protected $memSize = 200; 
    protected $version = "49.1 (original)"; 
    protected $quit;
    protected $mem = [];
    protected $lastChoice = [];
    protected $pres = [];
    protected $posts = [];
    protected $preExp;
    protected $sentence;
    function AI($noRandomFlag=false) {
        FEED::echoln("construct AI");
        $this->noRandom = ($noRandomFlag) ? true : false;
        $this->capitalizeFirstLetter = true;
        $this->debug = false;
        $this->memSize = 20;
        if(!$this->_dataParsed)
            $this->_init();
        $this->reset();
    }
    function __destruct() {
        FEED::echoln("destruct AI");
    }
    function reset() {
        FEED::echoln("called reset()");
        global $AIKeywords;
        $this->quit = false;
        $this->mem = [];
        $this->lastChoice = [];
        for($k=0; $k<count($AIKeywords); $k++)
        {
            $this->lastChoice[$k] = [];
            $rules = $AIKeywords[$k][2];
            for($i=0; $i<count($rules); $i++)
                $this->lastChoice[$k][$i] = -1;
        }
    }
    function _init() {
        FEED::echoln("called _init()");
        global $AISynons;
        global $AIKeywords;
        global $AIPres;
        global $AIPosts;
        global $AIQuits;
        // parse data and convert it from canonical form to internal use
        // prodoce synonym list
        $synPatterns = [];
        if( $AISynons && is_array($AISynons) ) {
            foreach($AISynons as $key => $arrayValues)
                $synPatterns[$key] = '('.$key.'|'.join('|', $arrayValues).')';
        }
        // check for keywords or install empty structure to prevent any errors
        if(!$AIKeywords) {
            $AIKeywords = [['###',0,[['###',[]]]]];
        }
        // 1st convert rules to regexps
        // expand synonyms and insert asterisk expressions for backtracking
        $sre='/@(\S+)/';
        $are='/(\S)\s*\*\s*(\S)/';
        $are1='/^\s*\*\s*(\S)/';
        $are2='/(\S)\s*\*\s*$/';
        $are3='/^\s*\*\s*$/';
        $wsre='/\s+/';
        for($k=0; $k<count($AIKeywords); $k++)
        {
            $rules = $AIKeywords[$k][2];
            $AIKeywords[$k][3] = $k;	// save original index for sorting
            for($i=0; $i<count($rules); $i++)
            {
                $r = $rules[$i];
                // check mem flag and store it as decomp's elements 2
                if($r[0][0] == '$')
                {
                    $ofs = 1;
                    while($r[0][$ofs] == ' ')
                        $ofs++;
                    $r[0] = substr($r[0], $ofs);
                    $r[2] = true;
                }
                else
                {
                    $r[2] = false;
                }
                // expand synonyms (v.1.1: work around lambda function)
                preg_match($sre, $r[0], $m, PREG_OFFSET_CAPTURE);
                while($m)
                {
                    // consult https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/RegExp/exec for documentation on this section.
                    $sp = $synPatterns[$m[1][0]] ? $synPatterns[$m[1][0]] : $m[1][0];
                    $r[0] = substr($r[0], 0, $m[0][1]-1).$sp.substr($r[0], $m[0][1] + strlen($m[0][0]));
                    preg_match($sre, $r[0], $m, PREG_OFFSET_CAPTURE);
                }
                // expand asterisk expressions (v.1.1: work around lambda function)
                if(preg_match($are3, $r[0]))
                {
                    $r[0] = '\\s*(.*)\s*';
                }
                else
                {
                    preg_match($are, $r[0], $m, PREG_OFFSET_CAPTURE);
                    if($m)
                    {
                        $lp = '';
                        $rp = $r[0];
                        while($m)
                        {
                            $lp .= substr($rp, 0, $m[0][1]);
                            if ($m[1][0] != ')')
                                $lp .= '\\b';
                            $lp .= '\\s*(.*)\\s*';
                            if (($m[2][0] != '(') && ($m[2][0] != '\\'))
                                $lp .= '\\b';
                            $lp .= $m[2][0];
                            $rp = substr($rp, $m[0][1] + strlen($m[0][0]));
                            preg_match($are, $rp, $m, PREG_OFFSET_CAPTURE);
                        }
                        $r[0] = $lp.$rp;
                    }
                    preg_match($are1, $r[0], $m, PREG_OFFSET_CAPTURE);
                    if($m)
                    {
                        $lp = '\\s*(.*)\\s*';
                        if (($m[1][0] != ')') && ($m[1][0] != '\\'))
                            $lp .= '\\b';
                        $r[0] = $lp.substr($r[0], $m[0][1]-1+strlen($m[0][0]));
                    }
                    preg_match($are2, $r[0], $m, PREG_OFFSET_CAPTURE);
                    if(m)
                    {
                        $lp = substr($r[0], 0, $m[0][1]);
                        if ($m[1][0] != '(')
                            $lp .= '\\b';
                        $r[0] = $lp.'\\s*(.*)\\s*';
                    }
                }
                // expand white space
                $r[0] = preg_replace($wsre, '\\s+', $r[0]);
            }
        }
        // now sort keywords by rank (highest first)
        sort($AIKeywords, "self::_sortKeywords");
        // and compose regexps and refs for pres and posts
        if($AIPres && count($AIPres))
        {
            $a = [];
            for($i = 0; $i < count($AIPres); $i+=2)
            {
                $a[] = $AIPres[i];
                $this->pres[$AIPres[$i]] = $AIPres[$i+1];
            }
            $this->preExp = '\\b('.join('|', $a).')\\b';
        }
        else
        {
            // default (should not match)
            $this->preExp = '/####/';
            $this->pres['####'] = '####';
        }
        if($AIPosts && count($AIPosts))
        {
            $a = [];
            for($i=0; $i<count($AIPosts); $i+=2)
            {
                $a[] = $AIPosts[i];
                $this->posts[$AIPosts[i]] = $AIPosts[i+1];
            }
            $this->postExp = '\\b('.join('|', $a).')\\b';
        }
        else
        {
            // default (should not match)
            $this->postExp = '/####/';
            $this->posts['####'] = '####';
        }
        // check for AIQuits and install default if missing
        if (!isset($AIQuits))
        {
            $AIQuits = [];
        }
        // done
        $this->_dataParsed = true;
    }
    function _sortKeywords($a, $b) {
        // sort by rank
        if($a[1] > $b[1])
            return -1;
        else if($a[1] < $b[1])
            return 1;
        // or original index
        else if($a[3] > $b[3])
            return 1;
        else if($a[3] < $b[3])
            return -1;
        else
            return 0;
    }
    function transform($text)
    {
        global $AIQuits;
        global $AIKeywords;
        $rpl = '';
        $this->quit = false;
        // unify text string
        $text = strtolower($text);
        $text = preg_replace('/@#\$%\^&\*\(\)_\+=~`\{\[\}\]\|:;<>\/\\\t/', ' ', $text);
        $text = preg_replace('/\s+-+\s+/', '.', $text);
        $text = preg_replace('/\s*[,\.\?!;]+\s*/', '.', $text);
        $text = preg_replace('/\s*\bbut\b\s*/', '.', $text);
        $text = preg_replace('/\s{2,}/', ' ', $text);

        // split text in part sentences and loop through them
        $parts = explode('.', $text);
        for($i=0; $i<count($parts); $i++)
        {
            $part = $parts[$i];
            if($part != '')
            {
                // check for quit expression
                for ($q=0; $q<count($AIQuits); $q++)
                {
                    if($AIQuits[$q] == $part)
                    {
                        $this->quit = true;
                        return $this->getFinal();
                    }
                }
                // preprocess (v.1.1: work around lambda function)
                preg_match($this->preExp, $part, $m, PREG_OFFSET_CAPTURE);
                if($m)
                {
                    $lp ='';
                    $rp = $part;
                    while($m)
                    {
                        $lp .= substr($rp, 0, $m[0][1]-1).$this->pres[$m[1]];
                        $rp = substr($rp, $m[0][1]+count($m[0]));
                        preg_match($this->preExp, $rp, $m, PREG_OFFSET_CAPTURE);
                    }
                    $part = $lp.$rp;
                }
                $this->sentence = $part;
                // loop through keywords
                for($k = 0; $k<count($AIKeywords); $k++)
                {
                    if(preg_match('/\\b'.$AIKeywords[$k][0].'\\b/i', $part))
                    {
                        $rpl = $this->_execRule($k);
                    }
                    if($rpl != '')
                        return $rpl;
                }
            }
        }
        // nothing matched try mem
        $rpl = $this._memGet();
        // if nothing in mem, so try xnone
        if($rpl == '')
        {
            $this->sentence = ' ';
            $k = $this->_getRuleIndexByKey('xnone');
            if($k >= 0)
                $rpl = $this->_execRule($k);
        }
        // return reply or default string
        return ($rpl != '') ? $rpl : 'I am at a loss for words.';
    }
    function _execRule($k)
    {
        global $AIKeywords;
        $rule = $AIKeywords[$k];
        $decomps = $rule[2];
        $paramre = '/\(([0-9]+)\)/';
        for($i=0; $i<count($decomps); $i++)
        {
            preg_match_all('/'.$decomps[$i][0].'/', $this->sentence, $m);
            if ($m) {
                $reasmbs = $decomps[$i][1];
                $memflag = $decomps[$i][2];
                $ri = $this->noRandom ? 0 : floor(FEED::randomFloat() * count($reasmbs));
                if( ($this->noRandom && $this->lastChoice[$k][$i] > $ri) || $this->lastChoice[$k][$i] == $ri )
                {
                    $ri = ++$this->lastChoice[$k][$i];
                    if($ri >= count($reasmbs))
                    {
                        $ri = 0;
                        $this->lastChoice[$k][$i] = -1;
                    }
                }
                else
                {
                    $this->lastChoice[$k][$i] = $ri;
                }
                $rpl = $reasmbs[$ri];
                if($this->debug)
                    FEED::echoln('Match:\nKey: '.$AIKeywords[$k][0].
                        '\nRank: '.$AIKeywords[$k][1].
                        '\nDecomp: '.$decomps[$i][0].
                        '\nReasmb: '.$rpl.
                        '\nMemflag: '.$memflag);
                if(preg_match('/^goto/i', $rpl))
                {
                    $ki = $this->_getRuleIndexByKey(substr($rpl, 5));
                    if($ki>=0)
                        return $this->_execRule($ki);
                }
                // substitute positional params (v.1.1: work around lambda function)
                preg_match($paramre, $rpl, $m1, PREG_OFFSET_CAPTURE);
                if($m1)
                {
                    $lp = '';
                    $rp = $rpl;
                    while($m1)
                    {
                        $param = $m[0][intval($m1[1])];
                        // postprocess param
                        preg_match($this->postExp, $param, $m2, PREG_OFFSET_CAPTURE);
                        if($m2)
                        {
                            $lp2 = '';
                            $rp2 = $param;
                            while($m2)
                            {
                                $lp2 .= substr($rp2, 0, $m2[0][1]-1).$this->posts[$m2[1][1]];
                                $rp2 = substr($rp2, $m2[0][1] + strlen($m2[0][0]));
                                preg_match($this->postExp, $rp2, $m2, PREG_OFFSET_CAPTURE);
                            }
                            $param = $lp2.$rp2;
                        }
                        $lp .= substr($rp, 0, $m1[0][1]-1).$param;
                        $rp = substr($rp, $m1[0][1] + strlen($m1[0][0]));
                        preg_match($paramre, $rp, $m1, PREG_OFFSET_CAPTURE);
                    }
                    $rpl = $lp.$rp;
                }
                $rpl = $this->_postTransform($rpl);
                if(memflag)
                    $this->_memSave($rpl);
                else
                    return $rpl;
            }
        }
        return '';
    }
    function _postTransform($s)
    {
        global $AIPostTransforms;
        // final cleanings
        $s = preg_replace('/\s{2,}/', ' ', $s);
        $s = preg_replace('/\s+\./', '.', $s);
        if( $AIPostTransforms && count($AIPostTransforms) )
        {
            for($i=0; $i<count($AIPostTransforms); $i+=2)
            {
                $s = preg_replace($AIPostTransforms[i], $AIPostTransforms[$i+1], $s);
            }
        }
        // capitalize first char (v.1.1: work around lambda function)
        if($this->capitalizeFirstLetter)
        {
            $re = '/^([a-z])/';
            if(preg_match($re, $s, $m))
                $s = strtoupper($m[0]).substr($s, 1);
        }
        return $s;
    }
    function _getRuleIndexByKey($key)
    {
        global $AIKeywords;
        for($k=0; $k < count($AIKeywords); $k++)
        {
            if($AIKeywords[$k][0] == $key)
                return $k;
        }
        return -1;
    }
    function _memSave($t)
    {
        $this->mem[] = $t;
        if(count($this->mem) > $this->memSize)
            array_shift($this->mem);
    }
    function _memGet()
    {
        if(count($this->mem))
        {
            if($this->noRandom)
                return array_shift($this->mem);
            else
            {
                $n = floor(FEED::randomFloat() * count($this->mem));
                $rpl = $this->mem[$n];
                for($i=$n+1; $i<count($this->mem); $i++)
                    $this->mem[$i-1] = $this->mem[$i];
                array_pop($this->mem);
                return $rpl;
            }
        }
        else
            return '';
    }
    function getFinal()
    {
        global $AIFinals;
        return $AIFinals[floor(FEED::randomFloat() * count($AIFinals))];
    }
    function getInitial()
    {
        global $AIInitials;
        return $AIInitials[floor(FEED::randomFloat() * count($AIInitials))];
    }
}
?>
