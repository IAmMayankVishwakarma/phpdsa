<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>character counting</title>
</head>
<body>
  <?php 
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
 echo "lenght of characters is ". count($car). "<br/>"; //count the length of array
  foreach($car as $key=>$value){
   echo $key . " >>" . $value . "<br/>";
 } 
  
  ?>
<?php
function charactercount($string){
  $count = count_chars("$string",1);

  foreach($count as $key => $value){
    echo chr($key) . " ----> " . $value . "<br/>";
  }
  }
charactercount("this");
charactercount("hello");
charactercount("Mayank");


?>

</body>
</html>