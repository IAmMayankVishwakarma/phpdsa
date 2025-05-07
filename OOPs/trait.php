<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>
    <?php
    trait School{
        public function Add($x,$y)
        {
             return $x+$y;          
        }
        public function Sub($x,$y)
        {
             return $x-$y;          
        }
    }
    class Display{
        use School;
        private $x;
        private $y;
        function __construct($x,$y)
        {
            $this->x = $x;
            $this->y = $y;
        }

        public function Calculate(){
           $add =  $this->Add($this->x,$this->y);
           $sub =  $this->Sub($this->x,$this->y);
          
           return [$add,$sub];
        }
    }

    $data = new Display(10,2);
    $result = $data->Calculate();
    
   echo 'Addition: '.$result[0].'<br/>';
   echo 'Substraction: '.$result[1].'<br/>';
   echo '<hr/>';
    ?>
</body>
</html>