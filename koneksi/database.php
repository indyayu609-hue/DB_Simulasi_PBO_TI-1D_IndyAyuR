<?php
// File: koneksi/database.php

class Database {
    private $host = "localhost";
    private $db_name = "db_simulasi_pb0_ti_1d_indyayur"; // Nama database sesuai file .sql Anda
    private $username = "root";
    private $password = "";
    public $conn;

    // Poin 1: Menangani koneksi database menggunakan PDO
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi gagal: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>