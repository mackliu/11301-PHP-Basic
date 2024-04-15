<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習2024-04-15</title>
</head>
<body>
<h1>九九乘法表-簡單</h1>
<?php

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){

        echo $j . " x " . $i . " = " . ($i*$j);
        echo " , ";
    }
    echo "<br>";
}


?>
<h2>九九乘法表-表格</h2>
<?php
echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>".$j . " x " . $i . " = " . ($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<style>
    td{
        border:1px solid black;
    }
</style>



</body>
</html>