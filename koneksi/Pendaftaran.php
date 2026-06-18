<?php
// File: Pendaftaran.php

abstract class Pendaftaran {
    // 3. Properti/Atribut Terenkapsulasi (protected)
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar; // Mapping dari biaya_pendaftaran_dasar

    // Constructor untuk memetakan nilai dari kolom tabel database Tahap 1
    public function __construct($db_row = []) {
        if (!empty($db_row)) {
            $this->id_pendaftaran        = $db_row['id_pendaftaran'] ?? null;
            $this->nama_calon            = $db_row['nama_calon'] ?? null;
            $this->asal_sekolah          = $db_row['asal_sekolah'] ?? null;
            $this->nilai_ujian           = $db_row['nilai_ujian'] ?? null;
            // Memetakan snake_case dari DB ke properti camelCase
            $this->biayaPendaftaranDasar = $db_row['biaya_pendaftaran_dasar'] ?? null;
        }
    }

    // 4. Metode Abstrak (Wajib tanpa isi/body)
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();

    // Getter Metode untuk mendukung Enkapsulasi (akses baca dari luar kelas)
    public function getIdPendaftaran() { return $this->id_pendaftaran; }
    public function getNamaCalon() { return $this->nama_calon; }
    public function getAsalSekolah() { return $this->asal_sekolah; }
    public function getNilaiUjian() { return $this->nilai_ujian; }
    public function getBiayaPendaftaranDasar() { return $this->biayaPendaftaranDasar; }
}
?>