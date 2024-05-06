<?php

class BankAccount {

    private int $accountNumber;
    private float $balance;

    public function __construct(int $accountNumber, float $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function balanceShow(): void {
        echo "Balance : " . $this->balance . "<br>"; 
    }

    public function showAccountNumber(): void {
        echo "Account Number : " . $this->accountNumber . "<br>"; 
    }

    public function deposit(float $amount): bool {
        if($amount > 0 ) {
            $this->balance += $amount;
            return true;
        } else {
            return false;
        }
    }

    public function withdraw(float $amount): bool {
        if(($amount > 0 ) && ($this->balance > $amount)) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }
    }

}

$account = new BankAccount(345890987575, 2400);

$account->balanceShow();

$account->deposit(100);
$account->balanceShow();

$account->withdraw(75);
$account->balanceShow();