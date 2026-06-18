<?php
// File: PendaftaranPrestasi.php
require_once 'Pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran {
    // 2. Properti tambahan (camelCase)
    protected $jenisPrestasi;
    protected $tingkatPrestasi;

    public function __construct($db_row = []) {
        parent::__construct($db_row);
        if (!empty($db_row)) {
            // Memetakan dari kolom database snake_case ke properti camelCase
            $this->jenisPrestasi   = $db_row['jenis_prestasi'] ?? null;
            $this->tingkatPrestasi = $db_row['tingkat_prestasi'] ?? null;
        }
    }

    // TAHAP 5 PERBAIKAN: Method Overriding sesuai aturan diskon Rp50.000
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar - 50000; 
    }

    public function tampilkanInfoJalur() {
        return "Jalur: Prestasi | Prestasi: " . $this->jenisPrestasi;
    }

    // Metode Query Spesifik untuk Jalur Prestasi
    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>