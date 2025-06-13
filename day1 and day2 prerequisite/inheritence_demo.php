<?php
class Employee {
    public $name;
    public $salary;

    function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

   public function getDetails() {
        echo "Name: $this->name, Salary: $this->salary\n";
    }
    
}

class Director{

}

class Manager extends Employee  {
    public $department;

    function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }
    public function getDetails() {
        echo "hello from Manager\n";
    }

    function getDetails1() {
        //parent::getDetails();
        echo "Department: $this->department\n";
    }
}
$myManager = new Manager("Alice", 80000, "HR");
$myManager->getDetails1(); // Outputs: Name: Alice, Salary: 80000, Department: HR
$myManager->getDetails();