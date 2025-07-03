<?php



class Mahasiswa_model
{

    private $dbh;
    private $stmt;

    private $mhs = [

        [
            "nama" => "Ahmad Daffa Herdian",
            "nim" => "231011",
            "email" => "daffa@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Jaulani",
            "nim" => "231033",
            "email" => "jaulani@gmail.com",
            "jurusan" => "Teknik Mesin"
        ]

    ];

    public function getAllMhs()
    {
        return $this->mhs;
    }
}
