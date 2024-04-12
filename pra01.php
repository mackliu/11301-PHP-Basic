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
$score=90;
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
<h2>分配成績等級</h2>

<h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
<!--
    shift+ctrl+p ->叫出快速功能
    輸入wrap,找到使用縮寫換行,按enter
    輸入emmet語法..
    多行時,使用*來包覆每一行
-->
<ul>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>
<?php
$level='';
if($score>=90 && $score <=100){
    $level="A";
}else if($score>=80){
    $level="B";
}else if($score>=70){
    $level="C";
}else if($score>=60){
    $level="D";
}else if($score>=0){
    $level="E";
}else{
    $level="成績必須在0~100之間,請重新輸入";
}
echo "等級判定為".$level;
?>

<h2>依據學生成績等級給予評價</h2>

<h3>根據學生不同的成績等級在網頁上印出不同的文字評價</h3>
<?php
$words='';
switch($level){
    case 'A':
        $words="表現優異，值得肯定！";
        $color='green';
    break;
    case 'B':
        $words="幹得好哦!";
        $color='#2eec73';
    break;
    case 'C':
        $words="再接再力！";
        $color='blue';
    break;
    case 'D':
        $words="持續努力！";
        $color='skyblue';
    break;
    case 'E':
        $words="笑你！";
        $color='red';
    break;
    default;
}

echo "<br>";
/* if($level == 'A' || $level=='B' || $level=='C' || $level=='D'){
    echo "<span style='font-size:32px;color:green'>";    
}else{
    echo "<span style='font-size:32px;color:red'>";
} */
echo "<span style='font-size:32px;color:$color'>";
echo $words;
echo "</span>";
?>
</body>
</html>