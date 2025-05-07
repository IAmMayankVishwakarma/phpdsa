<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alisaing in trait</title>
</head>
<body>
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
            echo "say hello from Second Trait".'<br/>';
        }
    }

    class schools{
        use First,Second{
            Second::sayHello as message;
            Second::sayHello insteadOf First;
        }
         
    }

    $test = new schools();
    $test->sayHello();
    $test->message();
    
    ?>
</body>
</html>