<?php
// Install Apache, PHP, CURL & Tor with apt-get
// sudo apt-get install -y apache2 php5 php5-curl tor

class PROXY {

    private $ch, $proxy;

    function __construct()
    {
        // $torSocks5Proxy = "socks5://127.0.0.1:9050";
        // direct connection
        $torSocks5Proxy = "127.0.0.1:9050";

        $this->ch = curl_init();

        //curl_setopt( $this->ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5 );
        curl_setopt( $this->ch,	CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5_HOSTNAME );
        curl_setopt( $this->ch, CURLOPT_PROXY, $torSocks5Proxy );
        curl_setopt( $this->ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $this->ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $this->ch, CURLOPT_RETURNTRANSFER, false );
        curl_setopt( $this->ch, CURLOPT_HEADER, false );
    }

    public function curl( $url, $postParameter = null )
    {
        if( sizeof( $postParameter ) > 0 )
            curl_setopt( $this->ch, CURLOPT_POSTFIELDS, $postParameter );

        curl_setopt( $this->ch, CURLOPT_URL, $url );
        return curl_exec( $this->ch );
    }

    public function changeProxyIdentity()
    {
        $ip      = '127.0.0.1';
        $port    = '9050';

        $fp = fsockopen(
            $ip, $port,
            $error_number,
            $err_string, 10
        );

        if (!$fp) {
            echo "Error while changing Tor proxy identity: {$error_number} : {$err_string}";
            return false;
        } else {
            fwrite($fp, "AUTHENTICATE\n");
            $received = fread($fp, 512);
            fwrite($fp, "signal NEWNY\n");
            $received = fread($fp, 512);
        }

        fclose($fp);

        return $received;
    }

    function __destruct()
    {
        curl_close( $this->ch );
    }

}

/*
 * Use the PROXY class for a GET request.

$proxy = new PROXY();
$proxy->changeProxyIdentity();
echo $proxy->curl( "http://check.torproject.org" );

 * Use the Proxy class for a POST request

$proxy = new PROXY();
$parameter = array(
	'parameter1' => 'value1',
	'parameter2' => 'value2'
	);
echo $proxy->curl( "http://check.torproject.org", $parameter );

 */
?>