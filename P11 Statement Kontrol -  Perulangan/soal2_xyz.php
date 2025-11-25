<?php
// soal2_xyz.php
// Simpan mis. di folder 06_for

$count = 0;
$solutions = [];

for ($x = 1; $x <= 23; $x++) { // max 23 karena minimal y=1 dan z=1
    for ($y = 1; $y <= 24; $y++) {
        for ($z = 1; $z <= 25; $z++) {
            if ($x + $y + $z === 25) {
                $solutions[] = ['x' => $x, 'y' => $y, 'z' => $z];
                $count++;
            }
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>SOAL 2 - Pasangan x,y,z</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        pre { background:#f8f8f8; padding:10px; border:1px solid #eee; }
    </style>
</head>
<body>
    <h2>SOAL 2 — Pasangan (x, y, z) bilangan asli dengan x + y + z = 25</h2>

    <p>Menampilkan semua pasangan dan jumlah penyelesaiannya:</p>

    <pre>
<?php
foreach ($solutions as $s) {
    echo "x = {$s['x']}, y = {$s['y']}, z = {$s['z']}\n";
}
echo "\nJumlah penyelesaian : $count\n";
?>
    </pre>
</body>
</html>
