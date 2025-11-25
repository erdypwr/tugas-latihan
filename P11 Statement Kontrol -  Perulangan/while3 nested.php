<!DOCTYPE html>
<html>
<body>
<?php
$i = 1;
while($i <= 5){
    $j = 1;
    while($j <= $i){
        echo "* ";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
</body>
</html>
