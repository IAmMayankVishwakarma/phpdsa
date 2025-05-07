<?php
namespace Aclass; // Define namespace

class Product
{
    var $name;
    var $author;
    var $price;

    function __construct($name, $author, $price)
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
    }

    function details()
    {
        echo "Product's Name == " . $this->name . '<br/>';
        echo "Author == " . $this->author . '<br/>';
        echo "Product's price === " . $this->price . '<br/>';
        echo '<hr/>';
    }

    function __destruct()
    {
        echo 'Function is destroyed';
    }
}

// Remove these lines to avoid automatic execution
// $data = new Product('Rich Dad Poor Dad', 'Robert T Kiyosaki', 100);
// $data->details();

// $book2 = new Product('7 daily habits of highly effective people', 'Stephen R Covey', 200);
// $book2->details();
?>
