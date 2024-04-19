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
</body>
</html>