<?php

require_once __DIR__ . '/inc/bankaccount.php';

$account = new BankAccount(345890987575, 2400);

$account->balanceShow();

try {
    $account->deposit(100);
    $account->balanceShow();

    $account->withdraw(75);
    $account->balanceShow();
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}