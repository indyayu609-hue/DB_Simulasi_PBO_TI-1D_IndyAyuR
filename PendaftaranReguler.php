<?php
// File: PendaftaranReguler.php
require_once 'Pendaftaran.php';

class PendaftaranReguler extends Pendaftaran {
    // 1. Properti tambahan (camelCase)
    protected $pilihanProdi;
    protected $lokasiKampus;

    public function __construct($db_row = []) {
        parent::__construct($db_row);
        if (!empty($db_row)) {
            // Memetakan dari kolom database snake_case ke properti camelCase
            $this->pilihanProdi = $db_row['pilihan_prodi'] ?? null;
            $this->lokasiKampus = $db_row['lokasi_kampus'] ?? null;
        }
    }

    // Mengimplementasikan metode abstrak dari Tahap 3
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar;
    }

    public function tampilkanInfoJalur() {
        return "Jalur: Reguler | Prodi: " . $this->pilihanProdi;
    }

    // Metode Query Spesifik untuk Jalur Reguler
    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>