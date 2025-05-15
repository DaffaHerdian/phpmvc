<?php

namespace app\core;

class Constant
{

    public static function getBaseUrl()
    {
        define("BASEURL", "http://localhost/phpmvc/public");
        return BASEURL;
    }
}
