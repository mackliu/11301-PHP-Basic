<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習2024-04-15</title>
    <style>
    table{
        border-collapse: collapse;
    }
    td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid table{
        border-collapse: collapse;
    }
    #grid td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid tr:nth-child(1) td,
    #grid td:nth-child(1){
        background:black;
        color:#CCC;
    }

</style>
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
<h2>九九乘法表-棋盤式表格</h2>
<?php
echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo " ";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j * $i);
        }
        /* if($i*$j!=0){
            echo $i*$j;
        }else if($j==0 && $i!=0){
            echo $i;
        }else if($j!=0 && $i==0){
            echo $j;
        }else{
            echo " ";
        } */
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>