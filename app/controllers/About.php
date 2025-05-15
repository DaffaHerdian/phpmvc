<?php

use app\core\Controller;

class About extends Controller
{

    public function index($nama = "Seseorang", $pekerjaan = "IT")
    {
        $data = [];
        $data["nama"] = $this->model("User_models")->getUser();
        $data["pekerjaan"] = $pekerjaan;
        $data["judul"] = "About";
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }
    public function page()
    {

        $this->view("about/page");
    }
}
