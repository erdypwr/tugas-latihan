<!DOCTYPE html>
<html>
<head>
    <title>Hasil Cek Tahun Kabisat</title>
</head>
<body>
    <h1>Hasil Cek Tahun Kabisat</h1>
    <?php
    $tahun = $_POST['tahun'];
    if ($tahun % 4 == 0) {
        if ($tahun % 100 == 0) {
            if ($tahun % 400 == 0) {
                echo "<p>Tahun $tahun adalah tahun kabisat.</p>";
            } else {
                echo "<p>Tahun $tahun bukan tahun kabisat.</p>";
            }
        } else {
            echo "<p>Tahun $tahun adalah tahun kabisat.</p>";
        }
    } else {
        echo "<p>Tahun $tahun bukan tahun kabisat.</p>";
    }
    ?>
</body>
</html>