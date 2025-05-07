<?php
$str = "The PHP 'string' functions are part of the PHP core.\n";
addcslashes($str, 'p') . '<br/>'; // add slash to given charcter
addcslashes($str, 'a..m') . '<br/>'; //add slash to special character
addslashes($str) . '<br/>'; // add slash into special characters('',"",\,/)
bin2hex($str) . '<br/>'; //binary to hexadecimal
bindec($str) . '<br/>'; //convert binary to decimal
chop($str, 'part'); // cutting the string from right side
chunk_split($str, 6, '*'); // split the character from given length
explode(' ', $str); //convert str into array
$arr = ['hello', 'my name is mayank '];
$method = join(' ', $arr); // it is converting array to string and join the data
str_split($str); //cut the string into charcter and save into an array
// print_r(strrev($str)).'<br/>'; //reverse the string
$str = strlen('this is a string'); //count the length of string


echo $str //count the length of string

  


?>