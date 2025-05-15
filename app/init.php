<?php
// require "../app/controllers/Home.php";

spl_autoload_register(function ($class) {

    $class = str_replace("\\", "/", $class);
    $class = str_replace("app", "", $class);
    require __DIR__ . "/" . $class . ".php";
    // echo __DIR__;
});
