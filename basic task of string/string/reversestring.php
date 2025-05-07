<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>reverse string</title>
  <style>
    body{
    background-color: black;
    color: grey;}
  </style>
</head>
<body>
  <?php 
  //reverse string without using built-in functions
  $string = "Hello World!";
  $reversedString = "";
  $length = strlen($string);
  for ($i = $length - 1; $i >= 0; $i--) {
      $reversedString .= $string[$i];
  }
  echo "Original String: $string<br>";  
  echo "Reversed String: $reversedString<br>";
  //reverse string using built-in functions
  $string = "Hello World!";
  $reversedString = strrev($string);
  echo "Original String: $string<br>";
  echo "Reversed String: $reversedString<br>";
  //reverse string using array functions
  $string = "Hello World!";
  $stringArray = str_split($string);
  $reversedArray = array_reverse($stringArray);
  $reversedString = implode("", $reversedArray);
  echo "Original String: $string<br>";
  echo "Reversed String: $reversedString<br>";
  
  
   
  

  

    
  ?>
</body>
</html>