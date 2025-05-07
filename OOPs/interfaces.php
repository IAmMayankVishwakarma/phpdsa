<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Example</title>
</head>
<body>
    <?php 
    // Define Interface
    interface Math {
        public function Area();  
    }

    // Implement Interface in Circle Class
    class Circle implements Math {
        private $radius;

        // Constructor to Initialize Radius
        public function __construct($radius) {
            $this->radius = $radius;
        }

        // Implement Area Method
        public function Area() {
            return pi() * pow($this->radius, 2);
        }
    }
    class Square implements Math{
      private $side;
      function __construct(int $side)
      {
        $this->side = $side;
      }
      public function Area(){
        $area = pow($this->side,2);
        return $area;
      }

    }
    // Create Object and Call Method
    $cir = new Circle(2);
    echo "The area of the circle is: " . $cir->Area().'<br/>';
    $square  = new Square('5');
    echo "The area of the squre is: " . $square->area();
?>
</body>
</html>
