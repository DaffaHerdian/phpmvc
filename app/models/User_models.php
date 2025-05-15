<?php

use app\core\Controller;

class User_models
{
    private $nama = "Daffa";

    public function getUser()
    {
        return $this->nama;
    }
}
