<?php
// Mengambil data dari form
$nama = htmlspecialchars($_POST['nama']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$alamat = htmlspecialchars($_POST['alamat']);
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = htmlspecialchars($_POST['asal_sekolah']);
$nilai_uan = $_POST['nilai_uan'];

$tanggal_lahir = $tanggal . "-" . $bulan . "-" . $tahun;

echo "<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .success { color: green; font-size: 24px; }
        .data-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .data-table th, .data-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .data-table th { background-color: #f2f2f2; width: 200px; }
    </style>
</head>
<body>
    <div class='container'>
        <h1 class='success'>Terima kasih <strong>$nama</strong> sudah mengisi form pendaftaran.</h1>
        <hr>

        <h2>Data Calon Mahasiswa:</h2>
        <table class='data-table'>
            <tr>
                <th>Nama Lengkap</th>
                <td>$nama</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>$tempat_lahir</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>$tanggal_lahir</td>
            </tr>
            <tr>
                <th>Alamat Rumah</th>
                <td>$alamat</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>$jenis_kelamin</td>
            </tr>
            <tr>
                <th>Asal Sekolah</th>
                <td>$asal_sekolah</td>
            </tr>
            <tr>
                <th>Nilai UAN</th>
                <td>$nilai_uan</td>
            </tr>
        </table>

        <p><em>Data Anda telah berhasil disimpan. Proses seleksi akan diumumkan melalui email dalam 7 hari kerja.</em></p>
        <br>
        <a href='soal3.html'>Kembali ke Form Pendaftaran</a>
    </div>
</body>
</html>";
?>