<?php
require_once "aclass.php"; // Ensure file is included only once

use Aclass\Product; // Use the Product class from the Aclass namespace
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Namespace</h1>
    <?php 
        $data = new Product('Rich Dad Poor Dad', 'Robert T Kiyosaki', 100);
      echo $data->details();
    ?>    
</body>
</html>
