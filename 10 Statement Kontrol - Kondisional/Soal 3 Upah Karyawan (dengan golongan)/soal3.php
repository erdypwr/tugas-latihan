<!DOCTYPE html>
<html>
<head>
    <title>Hasil Hitung Upah (Berdasarkan Golongan)</title>
</head>
<body>
    <h1>Hasil Hitung Upah (Berdasarkan Golongan)</h1>
    <?php
    $jam_kerja = $_POST['jam_kerja'];
    $golongan = $_POST['golongan'];
    $jam_normal = 48;
    $upah_lembur_per_jam = 3000;

    // Tentukan upah per jam berdasarkan golongan
    switch ($golongan) {
        case 'A':
            $upah_per_jam = 4000;
            break;
        case 'B':
            $upah_per_jam = 5000;
            break;
        case 'C':
            $upah_per_jam = 6000;
            break;
        case 'D':
            $upah_per_jam = 7500;
            break;
        default:
            $upah_per_jam = 0;
            break;
    }

    if ($jam_kerja <= $jam_normal) {
        $upah = $jam_kerja * $upah_per_jam;
    } else {
        $lembur = $jam_kerja - $jam_normal;
        $upah = ($jam_normal * $upah_per_jam) + ($lembur * $upah_lembur_per_jam);
    }

    echo "<p>Golongan: $golongan</p>";
    echo "<p>Jumlah jam kerja: $jam_kerja jam</p>";
    echo "<p>Upah yang diterima: Rp. " . number_format($upah, 0, ',', '.') . "</p>";
    ?>
</body>
</html>