<?php
class MyClass {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Name: $this->name, Age: $this->age";
    }

    public function __clone() {
        // This method is called when an object is cloned
        // You can modify properties or perform actions here if needed
        $this->name = "Cloned " . $this->name; // Example modification
    }
}
$myObject = new MyClass("John", 30);
$myObject1 = $myObject ;// This will not clone the object, it will just copy the reference
$myObject2 = clone $myObject; // This will create a new object with the same properties

$myobject3 = clone $myObject; // This will create a new object with the same properties
