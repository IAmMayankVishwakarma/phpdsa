<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>basic function</title>
    <style>
        body{
    background-color: black;
    color: grey;
}
    </style>
</head>
<body>
    <?php 
    $firstarray = [1,2,3,4,5];
    $second = ['hello','world','this','is','array'];
    $changeCase = array_change_key_case($second,CASE_UPPER);
    print_r($changeCase);
    ?>
</body>
</html>