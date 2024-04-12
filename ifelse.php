<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數</title>
</head>
<body>
    <a href="index.html">回首頁</a>
<?php
echo "ABC";

?>
<div>
    $a=10;<br>
    $b=50;<br>
</div>
<h4>交換後</h4>
<?php
$a=10;
$b=50;

$tmp=$a;
$a=$b;
$b=$tmp;


echo '$a='.$a;
echo "<br>";
echo '$b='.$b;

echo "<hr>";

$score=80;

$level=($score>=60)?'及格':'不及格';
/* if($score>=60){
    $level='及格';
}else{
    $level='不及格';
} */
echo "成績為:$score";
echo "<br>";
echo "是否及格:".$level;

?>

<h3>使用if...else來得到成級的等級</h3>
<ul>
    <li>100~90 => A</li>
    <li>89~80 => B</li>
    <li>79~70 => C</li>
    <li>69~60 => D</li>
    <li>59~0 => E</li>
</ul>
<?php
$score=91;
if($score>=90 && $score <=100){
    $level="A";
}else if($score>=80 && $score <= 89){
    $level="B";
}else if($score>=70 && $score <= 79){
    $level="C";
}else if($score>=60 && $score <= 79){
    $level="D";
}else if($score>=0 && $score <= 59){
    $level="E";
}else{
    $level="成績必須在0~100之間,請重新輸入";
}


echo "你的成績是:".$score;
echo "<br>";
echo "你的等級是:".$level;

$words='';
switch($level){
    case 'A':
        $words="表現優異，值得肯定！";
    break;
    case 'B':
    break;
    case 'C':
    break;
    case 'D':
    break;
    case 'E':
    break;
    default;

}
echo "<br>";
echo $words;

?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>