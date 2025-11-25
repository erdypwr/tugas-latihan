<!DOCTYPE html>
<html>
<body>
<?php
$i = 1;
$total = 0;

while($i <= 20){
    if($i % 2 == 0){
        $total += $i;
    }
    $i++;
}

echo "Jumlah bilangan genap 1–20 = $total";
?>
</body>
</html>
