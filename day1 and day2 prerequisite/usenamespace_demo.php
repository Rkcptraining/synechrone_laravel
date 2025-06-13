<?php
include 'namespace_demo.php';
use MyNamespace\MyClass;
use MyNamespace\MyClass2;

$m1 = new MyClass();
$m1->display(); // Outputs: This is a method from MyClass in MyNamespace.
$m1->calculate(); // Outputs: Calculating something in MyClass.

$m2 = new MyClass2();
$m2->display(); // Outputs: This is a method from MyClass2 in MyNamespace.
$m2->calculate(); // Outputs: Calculating something in MyClass2.