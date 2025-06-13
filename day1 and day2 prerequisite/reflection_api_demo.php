<?php
class MyClass {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHi() {
        echo "Hello, my name is $this->name and I am $this->age years old.\n";
    }

    public function __toString() {
        return "Name: $this->name, Age: $this->age";
    }
}
$myreflection = new ReflectionClass('MyClass');
$methods = $myreflection->getMethods();
foreach ($methods as $method) {
    echo "Method Name: " . $method->getName() . "\n";
    echo "Is Public: " . ($method->isPublic() ? 'Yes' : 'No') . "\n";
    echo "Is Static: " . ($method->isStatic() ? 'Yes' : 'No') . "\n";
    echo "Is Constructor: " . ($method->isConstructor() ? 'Yes' : 'No') . "\n";
    echo "Is Destructor: " . ($method->isDestructor() ? 'Yes' : 'No') . "\n";
    echo "Number of Parameters: " . $method->getNumberOfParameters() . "\n";
    echo "Number of Required Parameters: " . $method->getNumberOfRequiredParameters() . "\n";
    echo "\n";
}
