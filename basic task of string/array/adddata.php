<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$array = [];
for ($i=0; $i <= 10; $i++) { 
    $array[$i]= $i;
}
//  print($array);//print is not working
// printf($array);printf is not working 
// echo is not working 
// var_dump($array); it is working
// print_r($array); //this is index array

//Associative Arrays
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car['brand'] = 'mercedese';
$car['model'] =  ' mayback gls 600';
$car['year'] = '2024';

foreach ($car as $key => $value) {
    echo $key.' ==> '.$value."<br/>";
};

function getdata()
{
    echo " this is get data .\n";
};
function display($n){
    echo "this is display function ".$n."<br/>";
}
$task = [getdata(),display($n)];
echo $task[0]();
echo $task[1]('this is props');
?>
</body>
</html>