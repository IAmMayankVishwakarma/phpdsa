<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trait - instead of</title>
</head>
<body>
    <h1>Instead of Method in trait when two trait have same name of function</h1>
    <?php 
    trait First
    {
        function sayHello(){

            echo "say hello from First Trait";
        }
    }
    trait Second
    {
        function sayHello(){
            echo "say hello from Second Trait";
        }
    }

    class schools{
        use First,Second{
            Second::sayHello insteadOf First;
        }
         
    }

    $test = new schools();
    $test->sayHello();
    ?>
</body>
</html>