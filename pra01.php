<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
</head>
<body>
<h2>判斷成績及格學生</h2>
<h3>給定一個成績數字，判斷是否及格(60)分</h3>
<?php
$score=50;
echo "成績為".$score."分";
echo "<br>";


$result='';
if($score>=60){
    $result="及格";
}else{
    $result="不及格";
}

echo "判斷為".$result;

?>

</body>
</html>