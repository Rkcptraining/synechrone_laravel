<?php
class MyFinalClass {
    public final function display() {
        echo "This is a final class method.\n";
    }
    public function calculate() {
        echo "Calculating something in the final class.\n";
    }
}

class MyDerivedClass extends MyFinalClass {
    // This will cause an error because MyFinalClass is final and cannot be extended
    public function display() {
        echo "This is a derived class method.\n";
    }
}