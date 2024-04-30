<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double blue;
        }
        td{
            padding:5px 10px;
            border:1px solid lightgreen;

        }
    </style>
</head>
<body>
 <h2>線上月曆製作</h2>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>

<?php 
$month=4;
$year=date("Y");
echo "年".$year;
echo "<BR>";
echo "月份:".$month;
echo "<br>";
$firstDay=strtotime(date("Y-$month-1"));
$firstWeekStartDay=date("w",$firstDay);
echo "第一周的開始是第".$firstWeekStartDay."日";
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));
echo "<br>";
echo "最後一天是".date("Y-m-d",$lastDay);

$birthday='1974-4-1';

/* 
4  1  1 -0
5  3  3 -2
6  6  6 -5
7  1  1 -0
*/
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $date=$year.'-'.$month.'-'.$i*7+$j-($firstWeekStartDay-1);
        $replace=mb_substr($birthday,0,4);
        $replaceTo=str_replace($replace,date("Y"),$birthday);
        $spDate=strtotime($replaceTo);
        $dateSec=strtotime($date);
        if($i==0 && $j>=$firstWeekStartDay ){
            if($spDate==$dateSec){
                echo "<td style='background-color:yellow;font-weight:bolder;font-size:24px;color:blue'>";
            }else if(date("w",strtotime($date))==0 || date("w",strtotime($date))==6){
                echo "<td style='background-color:pink'>";
            }else{
                echo "<td>";
            }
            echo    $i*7+$j-($firstWeekStartDay-1);
            echo "</td>";
        }else if($i>0){
            if($spDate==$dateSec){
                echo "<td style='background-color:yellow;font-weight:bolder;font-size:24px;color:blue'>";
            }else if(date("w",strtotime($date))==0 || date("w",strtotime($date))==6){
                echo "<td style='background-color:pink'>";
            }else{
                echo "<td>";
            }
            if($i*7+$j-($firstWeekStartDay-1)<=$days){
                echo $i*7+$j-($firstWeekStartDay-1);
            }else{
                echo "&nbsp;";
            }
            echo "</td>";
            
        }else{
            echo "<td></td>";
        }
    }
    echo "</tr>";
}




?>
   
</body>
</html>
