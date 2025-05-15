<?php

use app\core\Controller;

class Mahasiswa extends Controller
{

    public function index($nama = "Seseorang", $pekerjaan = "IT")
    {
        $data = [];
        $data["nama"] = $this->model("User_models")->getUser();
        $data["judul"] = "Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->getAllMhs();
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }
}
