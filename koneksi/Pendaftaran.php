<?php
// File: Pendaftaran.php

// Poin 2: Membuat sebuah abstract class bernama Pendaftaran
abstract class Pendaftaran {
    
    // Poin 3: Properti/Atribut Terenkapsulasi (protected)
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar; // Pemetaan dari kolom biaya_pendaftaran_dasar

    // Poin 3: Constructor untuk memetakan nilai dari kolom tabel database Tahap 1
    public function __construct($db_row = []) {
        if (!empty($db_row)) {
            $this->id_pendaftaran        = $db_row['id_pendaftaran'] ?? null;
            $this->nama_calon            = $db_row['nama_calon'] ?? null;
            $this->asal_sekolah          = $db_row['asal_sekolah'] ?? null;
            $this->nilai_ujian           = $db_row['nilai_ujian'] ?? null;
            $this->biayaPendaftaranDasar = $db_row['biaya_pendaftaran_dasar'] ?? null;
        }
    }

    // Poin 4: Metode Abstrak (Tanpa Isi/Body)
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();
}
?>