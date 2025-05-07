<?php
// This is a simple PHP script that demonstrates how PHP handles array keys and values.
$array = array(1 => "a", "1" => "b", 1.5 => "c", true => "d");

echo $array[1]."\n"."<br/>"; // Output: d
$x = true and false;
var_dump($x)."\n"."<br/>"; // Output: bool(true)

$array = array(1, 2, 3, 4, 5);
$array = array_map(function($value) {
    return $value * 2;
}, $array);

echo implode(", ", $array)."<br/>"; // Output: 2, 4, 6, 8, 10

$array = [1, 2, 3, 4, 5];
unset($array[2]);
$result = array_values($array);

echo implode(", ", $result)."<br/>"; // Output: 1, 2, 4, 5


$person = 'John ';
$person[10] = 'Smith';
echo $person ."<br/>";

$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
unset($array['b']);
$result = array_keys($array);

echo implode(", ", $result); // Output: a, c

$array = [1, 2, 3, 4, 5];
foreach ($array as &$value) {
    $value *= 2;
}
unset($value);
$result = array_map(function($v) { return $v - 1; }, $array);
echo implode(", ", $result);

$count = 7;

while (--$count > 0) {
    $count++;
    echo $count;
    echo "hello";
}


?>
<?php
$number = 3;
echo $number;
echo $number++ + $number++;
echo $number;
echo $number-- - $number--;
echo $number;
?>