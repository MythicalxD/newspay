<?php
class Decode
{
    public function decode($hash)
    {
        /*$hash = "67b1fd18bbe13cbd62a5d1200e530fe870d1621b8c119fff9ea5913cc4dfba0dcf844";*/
        $lenVal = substr($hash, strlen($hash) - 1);
        $pos = 21;
        $result = substr($hash, $pos, $lenVal);
        return $result;
    }
}
