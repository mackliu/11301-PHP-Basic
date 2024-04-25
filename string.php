<h2>字串取代</h2>
<ul>
    <li>
        將”aaddw1123”改成”*********”
    </li>
</ul>
<?php
$s='aaddw1123';
/* $s=str_replace('a','*',$s);
echo $s;
echo "<br>";
$s=str_replace('d','*',$s);
echo $s;
echo "<br>";
$s=str_replace('w','*',$s);
echo $s;
echo "<br>";
$s=str_replace('1','*',$s);
echo $s;
echo "<br>";
$s=str_replace('2','*',$s);
echo $s;
echo "<br>";
$s=str_replace('3','*',$s);
echo $s;
echo "<br>"; */
$s=str_replace(['a','d','w','1','2','3'],'*',$s);
echo $s;
echo "<br>";

$s='aaddw1123';
$s=str_repeat("*",mb_strlen($s));
echo $s;

?>

<hr>