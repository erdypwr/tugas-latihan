<?php
// Mengambil data dari form
$saldo_awal = $_POST['saldo_awal'];
$bunga = $_POST['bunga'];
$bulan = $_POST['bulan'];

$saldo_akhir = $saldo_awal;

echo "<h1>Hasil Perhitungan Saldo Akhir</h1>";
echo "<p><strong>Saldo Awal:</strong> Rp. " . number_format($saldo_awal, 0, ',', '.') . "</p>";
echo "<p><strong>Bunga per Bulan:</strong> " . $bunga . "%</p>";
echo "<p><strong>Lama Menabung:</strong> " . $bulan . " bulan</p>";
echo "<hr>";

// Menghitung saldo per bulan
echo "<h3>Perkembangan Saldo:</h3>";
echo "<table border='1' cellpadding='8' style='border-collapse: collapse;'>";
echo "<tr style='background-color: #f2f2f2;'>
        <th>Bulan ke-</th>
        <th>Saldo Awal</th>
        <th>Bunga</th>
        <th>Saldo Akhir</th>
      </tr>";

for ($i = 1; $i <= $bulan; $i++) {
    $bunga_bulan = $saldo_akhir * ($bunga / 100);
    $saldo_akhir_bulan = $saldo_akhir + $bunga_bulan;
    
    // Warna baris bergantian
    $bg_color = ($i % 2 == 0) ? '#f9f9f9' : '#ffffff';
    
    echo "<tr style='background-color: $bg_color;'>";
    echo "<td align='center'>" . $i . "</td>";
    echo "<td>Rp. " . number_format($saldo_akhir, 0, ',', '.') . "</td>";
    echo "<td>Rp. " . number_format($bunga_bulan, 0, ',', '.') . "</td>";
    echo "<td><strong>Rp. " . number_format($saldo_akhir_bulan, 0, ',', '.') . "</strong></td>";
    echo "</tr>";
    
    $saldo_akhir = $saldo_akhir_bulan;
}

echo "</table>";

// Menampilkan hasil akhir
echo "<h2 style='color: green;'>Saldo Akhir setelah " . $bulan . " bulan: Rp. " . number_format($saldo_akhir, 0, ',', '.') . "</h2>";

// Menghitung total bunga
$total_bunga = $saldo_akhir - $saldo_awal;
echo "<p><strong>Total Bunga yang Didapat:</strong> Rp. " . number_format($total_bunga, 0, ',', '.') . "</p>";

echo "<br><a href='soal1.html'>Kembali ke Form</a>";
?>