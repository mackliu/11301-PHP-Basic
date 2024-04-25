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
echo "<br>";
//echo str_repeat(".",3);
$s='中央氣象署地震報告顯示，今天凌晨至上午8時22分，共發生14起地震，其中台灣東部海域在凌晨2時11分發生規模5.6地震，不到一分鐘，又發生一起規模5.5地震，全台有感，許多民眾被嚇醒。';
$new=mb_substr($s,8,20);
echo $new;
echo "...";
//echo str_repeat(".",3);
?>

<hr>
<h2>尋找字串與HTML、css整合應用</h2>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php
$key='網頁';
$color='pink';
$size='24px';
$s="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$s=str_replace($key,"<span style='color:$color;font-size:$size'>$key</span>",$s);


echo $s;
?>





<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
