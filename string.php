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
<h2>字串分割</h2>
<ul>
    <li>
        將”this,is,a,book”依”,”切割後成為陣列
    </li>
</ul>
<?php
$s='this,is,a,book';
$result=explode(",",$s);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<h2>字串組合</h2>
<ul>
    <li>
        將上例陣列重新組合成“this is a book”
    </li>
</ul>

<?php
$result=join(' ',$result);
echo $result;

?>

<h2>子字串取用</h2>
<ul>
    <li>
        將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
    </li>
</ul>
<?php
$s='The reason why a great man is great is that he resolves to be a great man';
$new=mb_substr($s,0,10);
echo $new;
echo "...";
//echo str_repeat(".",3);
?>

<hr>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
