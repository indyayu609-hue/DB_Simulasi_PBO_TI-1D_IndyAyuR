<?php
// File: index.php

// 1. Import semua file komponen yang sudah dibuat pada tahap sebelumnya
require_once 'koneksi/database.php';
require_once 'Pendaftaran.php';
require_once 'PendaftaranReguler.php';
require_once 'PendaftaranPrestasi.php';
require_once 'PendaftaranKedinasan.php';

// Initialize koneksi database
$database = new Database();
$db = $database->getConnection();

// 2. Memanfaatkan metode query spesifik dari Tahap 4 untuk mengambil data per jalur
$dataReguler   = PendaftaranReguler::getDaftarReguler($db);
$dataPrestasi  = PendaftaranPrestasi::getDaftarPrestasi($db);
$dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($db);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pendaftaran Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; color: #333; }
        h1 { text-align: center; color: #2c3e50; }
        h2 { margin-top: 40px; color: #2980b9; border-bottom: 2px solid #2980b9; padding-bottom: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #2c3e50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .biaya { font-weight: bold; color: #27ae60; }
    </style>
</head>
<body>

    <h1>Sistem Informasi Pendaftaran Mahasiswa Baru</h1>

    <h2>Daftar Mahasiswa - Jalur Reguler</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataReguler as $row): 
                $obj = new PendaftaranReguler($row); ?>
                <tr>
                    <td><?= $obj->getIdPendaftaran(); ?></td>
                    <td><?= $obj->getNamaCalon(); ?></td>
                    <td><?= $obj->getAsalSekolah(); ?></td>
                    <td><?= $obj->getNilaiUjian(); ?></td>
                    <td><?= $obj->tampilkanInfoJalur(); ?></td>
                    <td class="biaya">Rp <?= number_format($obj->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Daftar Mahasiswa - Jalur Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya (Setelah Potongan)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataPrestasi as $row): 
                $obj = new PendaftaranPrestasi($row); ?>
                <tr>
                    <td><?= $obj->getIdPendaftaran(); ?></td>
                    <td><?= $obj->getNamaCalon(); ?></td>
                    <td><?= $obj->getAsalSekolah(); ?></td>
                    <td><?= $obj->getNilaiUjian(); ?></td>
                    <td><?= $obj->tampilkanInfoJalur(); ?></td>
                    <td class="biaya">Rp <?= number_format($obj->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Daftar Mahasiswa - Jalur Kedinasan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya (+ Surcharge 25%)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataKedinasan as $row): 
                $obj = new PendaftaranKedinasan($row); ?>
                <tr>
                    <td><?= $obj->getIdPendaftaran(); ?></td>
                    <td><?= $obj->getNamaCalon(); ?></td>
                    <td><?= $obj->getAsalSekolah(); ?></td>
                    <td><?= $obj->getNilaiUjian(); ?></td>
                    <td><?= $obj->tampilkanInfoJalur(); ?></td>
                    <td class="biaya">Rp <?= number_format($obj->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>