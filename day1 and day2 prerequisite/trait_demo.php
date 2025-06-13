<?php
trait MyTrait {
    public function display() {
        echo "This is a method from MyTrait.\n";
    }
    public function calculate() {
        echo "Calculating something in MyTrait.\n";
    }
}
trait MyTrait2 {
    public function calculate() {
        echo "Calculating something in MyTrait2.\n";
    }
}

class MyClass {
    use MyTrait, MyTrait2{
        MyTrait2::calculate insteadof MyTrait; // Resolving method conflict
        MyTrait::calculate as myNewCalculate; // Renaming method from MyTrait
    } // Using the trait in MyClass

    function myextraMethod() {
        echo "This is an extra method in MyClass.\n";
    }
}

$m1 = new MyClass();
$m1->display(); // Outputs: This is a method from MyTrait.
$m1->calculate(); // Outputs: Calculating something in MyTrait.
$m1->myextraMethod(); // Outputs: This is an extra method in MyClass.
//$m1->calculate1(); // Outputs: Calculating something in MyTrait2.