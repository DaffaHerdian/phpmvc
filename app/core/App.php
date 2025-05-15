<?php

namespace app\core;

class App
{

    protected $controller = "Home", $method = "Index", $params;

    public function __construct()
    {
        $url = $this->getApp();

        // Kita Butuh Require sesuai dengan url yg kita isi
        if (isset($url[0])) {
            if (file_exists("../app/controllers/" . $url[0] . ".php")) {
                $this->controller = $url[0];
                unset($url[0]);
            }
            require "../app/controllers/" . $this->controller . ".php";

            $this->controller = new $this->controller;
        } else {
            require "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;
        }

        // Kita Butuh Method sesuai url yg kita isi
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = !empty($url) ? array_values($url) : [];
        // var_dump($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function getApp()
    {
        if (isset($_GET["url"])) {

            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
