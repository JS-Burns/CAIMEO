<?php
final class FEED
{
    /*
        Echo specified text appending with newline.
    */
    static function echoln($text) {
        echo $text."</br>";
    }
    /*
         Random floating point number from
    */
    static function randomFloat() {
        return mt_rand() / mt_getrandmax();
    }
}
?>