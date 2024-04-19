<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
    <h1>陣列</h1>


    <?php
    $a=["A","B","C"];
    $b=["name"=>"劉勤永","hight"=>169];
    $c=[["A","B","C"],["name"=>"劉勤永","hight"=>169]];
    print_r($a);
    echo "<hr>";
    print_r($b);
    echo "<hr>";
    print_r($c);
    
    echo "<hr>";
    
    echo serialize($a);
    echo "<hr>";
    echo serialize($b);
    echo "<hr>";
    echo serialize($c);


    echo "<hr>";
    
    
    $a=['A','B','C'];
    //$tmp=implode(",",$a);
    $tmp=join(",",$a);
    echo $tmp;
    
    echo "<hr>";
    $b=explode(",",$tmp);
    print_r($b);
?>
<h2>利用程式來產生陣列</h2>

<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>
<?php
$ninenine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        //echo "$i x $j = ".($i*$j);
        $ninenine[]="$i x $j = ".($i*$j);
    }
}
/* echo "<pre>";
print_r($ninenine);
echo "</pre>"; */

$i=1;
foreach($ninenine as $nine ){
    echo $nine;
    if($i%9==0){
        echo "<br>";
    }
    $i++;
}
echo "<hr>";
?>
<style>
table{
    border-collapse: collapse;
}
td{
    border:1px solid gray;
    padding:5px 10px;
}
</style>
<?php
echo "<table>";
foreach($ninenine as $idx => $nine ){
    
    if($idx%9==0){
        echo "<tr>";
    }

    echo "<td> $nine </td>";

    if(($idx+1)%9==0){
        echo "</tr>";
    }

}
echo "</table>";
echo "陣列中有".count($ninenine)."個元素";
?>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>

<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php
$lotto=[];
while(count($lotto)<6){
    $tmp=rand(1,38);
    if(!in_array($tmp,$lotto)){
        $lotto[]=$tmp;
    }
}

echo join(",",$lotto);
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