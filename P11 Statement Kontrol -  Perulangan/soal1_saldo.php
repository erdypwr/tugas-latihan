<?php
// soal1_saldo.php
// Simpan di folder mis. 06_for atau sesuai keinginan
function rupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

$results = [];
$final_balance = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil input
    $saldo_awal = floatval(str_replace(',', '', $_POST['saldo_awal'] ?? '0'));
    $n_bulan = intval($_POST['n_bulan'] ?? 0);

    // nilai default safety
    if ($saldo_awal < 0) $saldo_awal = 0;
    if ($n_bulan < 0) $n_bulan = 0;

    $balance = $saldo_awal;
    $admin_fee = 9000;

    for ($bulan = 1; $bulan <= $n_bulan; $bulan++) {
        // tentukan suku bunga tahunan berdasarkan saldo saat ini
        if ($balance < 1100000) {
            $annual_rate = 0.03; // 3% p.a.
        } else {
            $annual_rate = 0.04; // 4% p.a.
        }

        $monthly_interest = $balance * ($annual_rate / 12.0);
        $balance += $monthly_interest;
        $balance -= $admin_fee;

        // jangan biarkan negatif (opsional)
        if ($balance < 0) $balance = 0;

        $results[] = [
            'bulan' => $bulan,
            'bunga_p.a' => $annual_rate,
            'bunga_bulanan' => $monthly_interest,
            'saldo_setelah' => $balance
        ];
    }

    $final_balance = $balance;
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>SOAL 1 - Hitung Saldo Akhir</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background:#f0f0f0; }
        .right { text-align: right; }
    </style>
</head>
<body>
    <h2>SOAL 1 — Hitung Saldo Akhir Setelah N Bulan</h2>

    <form method="post">
        <label>Saldo awal (angka, mis. 1000000): <input type="number" name="saldo_awal" step="1" value="<?php echo isset($_POST['saldo_awal'])?htmlspecialchars($_POST['saldo_awal']):'1000000'; ?>" required></label>
        <br><br>
        <label>Jumlah bulan (N): <input type="number" name="n_bulan" step="1" value="<?php echo isset($_POST['n_bulan'])?htmlspecialchars($_POST['n_bulan']):'12'; ?>" required></label>
        <br><br>
        <button type="submit">Hitung</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h3>Rincian Per Bulan</h3>
        <table>
            <tr>
                <th>Bulan</th>
                <th>Bunga p.a.</th>
                <th>Bunga (bulan)</th>
                <th>Saldo setelah bunga & administrasi</th>
            </tr>
            <?php foreach ($results as $r): ?>
            <tr>
                <td><?php echo $r['bulan']; ?></td>
                <td class="right"><?php echo ($r['bunga_p.a']*100) . '%'; ?></td>
                <td class="right"><?php echo rupiah($r['bunga_bulanan']); ?></td>
                <td class="right"><?php echo rupiah($r['saldo_setelah']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <h3>Saldo Akhir Setelah <?php echo intval($n_bulan); ?> bulan: <?php echo rupiah($final_balance); ?></h3>
    <?php endif; ?>
</body>
</html>
