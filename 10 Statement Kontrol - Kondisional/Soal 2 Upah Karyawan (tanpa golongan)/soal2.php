<!DOCTYPE html>
<html>
<head>
    <title>Hasil Hitung Upah</title>
</head>
<body>
    <h1>Hasil Hitung Upah</h1>
    <?php
    $jam_kerja = $_POST['jam_kerja'];
    $upah_per_jam = 2000;
    $jam_normal = 48;
    $upah_lembur_per_jam = 3000;

    if ($jam_kerja <= $jam_normal) {
        $upah = $jam_kerja * $upah_per_jam;
    } else {
        $lembur = $jam_kerja - $jam_normal;
        $upah = ($jam_normal * $upah_per_jam) + ($lembur * $upah_lembur_per_jam);
    }

    echo "<p>Jumlah jam kerja: $jam_jam kerja</p>";
    echo "<p>Upah yang diterima: Rp. " . number_format($upah, 0, ',', '.') . "</p>";
    ?>
</body>
</html>