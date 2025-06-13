
<?php
abstract class Book{
 abstract function calculateInterest():float;
 function getDetails() {
     echo "This is a book.\n";
 }
}
//$t1 = new Book(); // This will cause an error because Book is abstract and cannot be instantiated

class ScienceBook extends Book {
    public function calculateInterest():float {
        echo "Calculating interest for Science Book.\n";
        return 0.05; // Example interest rate
    }
}

$t1 = new ScienceBook();
$t1->calculateInterest(); // Outputs: Calculating interest for Science Book.
$t1->getDetails(); // Outputs: This is a book.