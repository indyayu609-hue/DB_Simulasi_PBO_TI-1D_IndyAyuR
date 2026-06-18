<?php
// File: koneksi/database.php

class Database {
    private $host = "localhost";
    private $db_name = "db_simulasi_pb0_ti_1d_indyayur"; // Menyesuaikan nama DB di file SQL Anda
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            echo "Kesalahan Koneksi: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
}
?>