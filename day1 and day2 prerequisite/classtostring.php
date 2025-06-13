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
}
$p = new MyClass("John", 30);
echo $p; // Outputs: Name: John, Age: 30