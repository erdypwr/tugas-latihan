<?php
$bilangan1 = $_POST['bli1'];
$bilangan2 = $_POST['bli2'];
?>
<html>
<head>
    <title>Contoh Request POST</title>
</head>
<body>
    <h1>Input dua bilangan</h1>
    <?php
    echo "<p>Anda telah memasukkan bilangan pertama = ".$bilangan1. "</p>";
    echo "<p>Anda telah memasukkan bilangan kedua = ".$bilangan2. "</p>";
    ?>
</body>
</html>