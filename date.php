<h2>給定兩個日期，計算中間間隔天數</h2>
<?php
$start="2024-4-10";
$end='2024-4-15';
echo '開始日：'.$start;
echo "<br>";
echo '結束日'.$end;
echo "<br>";

//30天
$start=strtotime($start);
$end=strtotime($end);
echo $start;
echo "<br>";
echo $end;
echo "<br>";

$diff=$end-$start;
echo $diff/(60*60*24);
?>


<h2>計算距離自己下一次生日還有幾天</h2>
<?php
echo "今年是".date("Y");
echo "<br>";
echo "今天是".date("Y年m月d日");
echo "<br>";
$birthday="1974-1-7";
$start=strtotime(date('Y-m-d'));
$tb=str_replace(mb_substr($birthday,0,4),date("Y"),$birthday);
if(strtotime($tb)<strtotime('now')){
    $tb=str_replace(mb_substr($birthday,0,4),(date("Y")+1),$birthday);
}
$end=strtotime($tb);
$diff=$end-$start;
echo floor($diff/(60*60*24));
?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>






<h2>利用迴圈來計算連續五個周一的日期</h2>
例:
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>



