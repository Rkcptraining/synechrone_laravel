<?php
class Myclass{

    const MY_CONSTANT = "I am a constant";

    static string $staticVar = "I am static variable";
    static int $staticInt = 10;

    public function __construct() {
        // Constructor code can go here if needed
        self::$staticInt++;
        echo "Constructor called. Static int is now: " . self::$staticInt . "\n";

    }
}
$obj = new Myclass();
echo Myclass::$staticVar . "\n"; // Accessing static variable using class name
//echo $obj ->staticVar . "\n"; // Accessing static variable using object (not recommended)
echo Myclass::MY_CONSTANT . "\n"; // Accessing constant using class name
