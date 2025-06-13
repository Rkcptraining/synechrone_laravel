<?php
interface BankInterface {

    const BANK_NAME = "MyBank";

    public function getBalance();
    public function deposit($amount);
    public function withdraw($amount);
}

interface SavingsInterface{
    public function getInterestRate();
    public function calculateInterest($amount);
}

// interface supports multiple inheritance hover class not supports multiple inheritance
interface LoanInterface extends BankInterface , SavingsInterface {
    public function getLoanAmount();
    public function repayLoan($amount);
}

class MyAccount{

}

//if a class implements an interface, it must implement all methods defined in the interface
// If a class extends another class, it can also implement interfaces
//extends keyrd must come first then implements
class Accounts extends MyAccount implements  LoanInterface {
    private $balance = 0;
    private $loanAmount = 0;

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount. New balance: " . $this->getBalance() . "\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount. New balance: " . $this->getBalance() . "\n";
        } else {
            echo "Insufficient funds or invalid withdrawal amount.\n";
        }
    }

    public function getLoanAmount() {
        return $this->loanAmount;
    }

    public function repayLoan($amount) {
        if ($amount > 0 && $amount <= $this->loanAmount) {
            $this->loanAmount -= $amount;
            echo "Repayment made: $amount. Remaining loan amount: " . $this->getLoanAmount() . "\n";
        } else {
            echo "Invalid repayment amount.\n";
        }
    }
  
}
$t1 = new Accounts();