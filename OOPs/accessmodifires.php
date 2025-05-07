<?php 

class books{
    public $name;
    private $author;
    protected $price;

    function __construct($name,$author,$price)
    {
        $this->name=$name;
        $this->author=$author;
        $this->price=$price;
    }
    function getName(){
        echo 'function getName ==> '.$this->name.'<br/>';
    }
    Function getAuthor(){
        echo 'function getAuthor ==> '.$this->author.'<br/>';
    } 
    Function getPrice(){

        echo 'function getPrice ==> '.$this->price.'<br/>';
    } 
}
$data = new books('book1','unknown',3000);
$data->getName();
$data->getAuthor();
// echo $data->author;

?>