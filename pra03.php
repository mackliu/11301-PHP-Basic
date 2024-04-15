<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<h2>直角三角形</h2>    

<?php
$stars=5;

for($i=0;$i<$stars;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>倒直角三角形</h2>    

<?php
for($i=$stars;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>正三角形</h2>    

<?php
for($i=0;$i<$stars;$i++){
    for($k=0;$k<$stars-1-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<h2>菱形</h2>    

<?php
for($i=0;$i<$stars;$i++){
    for($k=0;$k<$stars-1-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=$stars-1;$i>0;$i--){
    for($k=0;$k<$stars-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2-1;$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>