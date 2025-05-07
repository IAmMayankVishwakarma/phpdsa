<?php
class Company{
    public $name = 'temp';
    public $turnover = 0000;
    public $employee = 0000;

    function __construct(){
        // $name,$turnover,$employee
        // $this->name =$name;
        // $this->turnover =$turnover;
        // $this->employee =$employee;
    }

    function getData(){
        echo 'Name ===> '. $this->name.'<br/>';
        echo 'turnover ===>'.$this->turnover. '<br/>';
        echo 'employee ===> '.$this->employee. '<br/>';
        echo '<hr/>';
    }
}

class dummy extends Company{

    function child(){
        echo "hello from child Class";
        echo '<hr/>';
    }
}
// parent class
$company1 = new Company();
$company1->getdata();
// $company1->child(); this is not working
// chail class
$company2 = new dummy();
$company2->child();
$company2->getData();

?>