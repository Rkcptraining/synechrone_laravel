<?php
class Book {
    private $title;
    protected $price;
    public $author;


    function __construct($tit = "Default Title", $par = 0, $auth = "Unknown Author") {
        $this->author = $auth;
        $this->title = $tit;
        $this->price = $par;
    }

    function setPrice($par){
        $this->price = $par;

    }
    function getPrice(){
        echo "Price is :  $this->price\n";
    }
    function setTitle($tit){
        $this->title = $tit;
    }
    function getTitle(){
        echo " Title is :  $this->title \n";
    }

    function __destruct(){
        var_dump($this);
        echo "Book object is being destroyed.\n";
    }
}
$book1 = new Book();
$book1->setTitle("PHP Programming");
$book1->setPrice(1000);
$book1->getTitle() ;
$book1->getPrice() ;

$book2 = new Book("Java Programming", 1500, "Rajesh Upadhyay");
$book2->getTitle() ;
$book2->getPrice() ;

//echo " Title : " . $book2->title . "\n"; // This will cause an error because title is private
//echo " Price : " . $book2->price . "\n"; // This will cause an error because price is protected
echo " Author : " . $book2->author . "\n"; // This will work because author is public

class Student extends Book {
    public $rollNo;

    function __construct($tit, $par, $auth, $roll) {
        parent::__construct($tit, $par, $auth);
        $this->rollNo = $roll;
    }

    function getRollNo() {
        echo "Roll No is :  $this->rollNo\n";
    }
}
class Teacher{
    
}