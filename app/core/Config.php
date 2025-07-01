<?php

namespace app\core;

class Config
{

    public static function getBaseUrl()
    {
        define("BASEURL", "http://localhost/phpmvc/public");
        return BASEURL;
    }
    public static function getServer()
    {
        define("SERVER", "localhost");
        return SERVER;
    }
    public static function getDatabase()
    {
        define("DATABASE", "project");
        return DATABASE;
    }
    public static function getUser()
    {
        define("USER", "root");
        return USER;
    }
}
