<?php


use app\core\Controller;


class Home extends Controller
{
    public function index($nama = "Seseorang", $pekerjaan = "IT")
    {
        $data = [];
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["judul"] = "Home";
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
    public function page($page = 0, $baris = 0)
    {
        echo "Halaman ke $page, Baris Ke $baris";
    }
}
