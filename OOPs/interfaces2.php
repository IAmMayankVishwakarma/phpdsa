<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interfaces</title>
</head>
<body>
    <?php 
    class Marks
    {
       protected $m1,$m2,$m3;
       function __construct($m1,$m2,$m3)
       {
        $this->m1=$m1;
        $this->m2=$m2;
        $this->m3=$m3;
       }
      
    }
    interface Percent{
        public function percent();
    }

    class Students extends Marks implements Percent{
        public function percent(){
            $per = (($this->m1+$this->m2+$this->m3)*100)/300;
           return $per;
        }

    }

$data  = new Students(50,70,80);
echo $data->percent();

    ?>
</body>
</html>