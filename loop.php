<h2>FOR</h2>
<?php
//echo $i;
for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}

echo "<br>";
echo $i;
echo "<hr>";

//echo $i;
for($i=0;$i>-100;$i=$i*2-1){
    echo $i*10;
    echo "<br>";
}

echo "<br>";
echo $i;

?>
<h2>WHILE</h2>
<?php
$score=10;
echo "原始成績=".$score;
while($score<60){
    $score=$score+10;
}

echo "<br>";
echo "調整結果=".$score;

?>
<h2>巢狀結構</h2>
<?php
$show=false;

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
 
    if($i>5 && $show=false){
        echo "<br>";
        echo "執行一半了...";
        $show=true;
    }
    echo "<br>";
}

//if中只放變數的應用
$a=true;
if($a){
    echo "TRUE";
}else{
    echo "FALSE";
}
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
