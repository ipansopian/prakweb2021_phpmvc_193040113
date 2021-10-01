<?php

class Mahasiswa_model {
    // private $mhs = [
    // [
    //     "nama" => "Fikri Anjani",
    //     "nrp" => "193040112",
    //     "email" => "fikrianjani@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ],
    // [
    //     "nama" => "Ipan Sopian",
    //     "nrp" => "193040113",
    //     "email" => "ipansopian@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ],
    // [
    //     "nama" => "Aimar Sacher",
    //     "nrp" => "193040114",
    //     "email" => "aimarsacher@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ]
    // ];

    private $dbh;
    private $stmt;

    public function __construct() 
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}