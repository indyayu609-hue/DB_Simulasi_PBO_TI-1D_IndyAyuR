<?php
// File: PendaftaranKedinasan.php
require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran {
    // 3. Properti tambahan (camelCase)
    protected $skIkatanDinas;
    protected $instansiSponsor;

    public function __construct($db_row = []) {
        parent::__construct($db_row);
        if (!empty($db_row)) {
            // Memetakan dari kolom database snake_case ke properti camelCase
            $this->skIkatanDinas   = $db_row['sk_ikatan_dinas'] ?? null;
            $this->instansiSponsor = $db_row['instansi_sponsor'] ?? null;
        }
    }

    // TAHAP 5 PERBAIKAN: Method Overriding dengan tambahan biaya khusus 25% (* 1.25)
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        return "Jalur: Kedinasan | Sponsor: " . $this->instansiSponsor;
    }

    // Metode Query Spesifik untuk Jalur Kedinasan
    public static function getDaftarKedinasan($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>