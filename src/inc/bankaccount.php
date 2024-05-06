<?php

class BankAccount {

private int $accountNumber;
private float $balance;

public function __construct(int $accountNumber, float $balance) {
    $this->accountNumber = $accountNumber;
    $this->balance = max(0, $balance);
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
        throw new InvalidArgumentException("Сума має бути більше нуля");
    }
}

public function withdraw(float $amount): bool {
    if($amount > 0 && $this->balance >= $amount) {
        $this->balance -= $amount;
        return true;
    } else {
        throw new InvalidArgumentException("Недостатньо коштів або недійсна сума");
    }
}

}