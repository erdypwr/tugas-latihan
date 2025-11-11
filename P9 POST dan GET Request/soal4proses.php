<?php
// Mengambil data dari form dengan method GET
$nama = htmlspecialchars($_GET['nama']);
$tempat_lahir = htmlspecialchars($_GET['tempat_lahir']);
$tanggal = $_GET['tanggal'];
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun'];
$alamat = htmlspecialchars($_GET['alamat']);
$jenis_kelamin = $_GET['jenis_kelamin'];
$asal_sekolah = htmlspecialchars($_GET['asal_sekolah']);
$nilai_uan = $_GET['nilai_uan'];

$tanggal_lahir = $tanggal . "-" . $bulan . "-" . $tahun;

echo "<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran (GET Method)</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .success { color: green; font-size: 24px; }
        .warning { color: orange; font-size: 18px; }
        .data-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .data-table th, .data-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .data-table th { background-color: #f2f2f2; width: 200px; }
        .comparison { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; margin: 20px 0; }
    </style>
</head>
<body>
    <div class='container'>
        <h1 class='success'>Terima kasih <strong>$nama</strong> sudah mengisi form pendaftaran.</h1>
        <h2 class='warning'>⚠ Form ini menggunakan method GET</h2>
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

        <div class='comparison'>
            <h3>Perbedaan Method GET vs POST:</h3>
            <table>
                <tr>
                    <th>GET Method</th>
                    <th>POST Method</th>
                </tr>
                <tr>
                    <td>✅ Data terlihat di URL</td>
                    <td>✅ Data tidak terlihat di URL</td>
                </tr>
                <tr>
                    <td>❌ Tidak aman untuk data sensitif</td>
                    <td>✅ Lebih aman untuk data sensitif</td>
                </tr>
                <tr>
                    <td>❌ Terbatas panjang URL (~2048 karakter)</td>
                    <td>✅ Tidak terbatas panjang data</td>
                </tr>
                <tr>
                    <td>✅ Dapat di-bookmark</td>
                    <td>❌ Tidak dapat di-bookmark</td>
                </tr>
                <tr>
                    <td>✅ Cocok untuk pencarian/filter</td>
                    <td>✅ Cocok untuk form pendaftaran</td>
                </tr>
            </table>
            
            <p><strong>Kesimpulan:</strong> Method GET tidak cocok untuk form pendaftaran karena data sensitif terlihat di URL dan kurang aman.</p>
        </div>

        <p><em>Periksa address bar browser - semua data form terlihat dalam parameter URL!</em></p>
        <br>
        <a href='soal4.html'>Kembali ke Form Pendaftaran (GET)</a> | 
        <a href='soal3.html'>Lihat Form dengan POST</a>
    </div>
</body>
</html>";
?>