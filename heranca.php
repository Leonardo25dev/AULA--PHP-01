<?php

// Define the 'Conta' class
class Conta {

    // Public property to store the account balance
    public $saldo = 0;

    // Method to deposit funds into the account
    function depositar($valor) {
        $this->saldo += $valor; // Increment the balance using the '+= operator'
    }

    // Method to withdraw funds from the account
    function sacar($valor) {
        $this->saldo -= $valor; // Decrement the balance using the '-=' operator
    }
}

// Define the 'ContaCorrente' class as a subclass of 'Conta'
class ContaCorrente extends Conta {

    // Method to transfer funds from one account to another
    function transferir($contaDestino, $valor) {
        // Check if the transfer amount exceeds the available balance
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para transferência!<br>";
            return; // Terminate the transfer if funds are insufficient
        }

        // Update the balance of both accounts
        $this->saldo -= $valor; // Deduct the transfer amount from this account
        $contaDestino->saldo += $valor; // Add the transfer amount to the destination account

        echo "Transferência realizada com sucesso!<br>";
    }
}

// Create two 'ContaCorrente' objects
$novaConta1 = new ContaCorrente();
$novaConta2 = new ContaCorrente();

// Simulate a transfer of 500 from 'novaConta1' to 'novaConta2'
$novaConta1->transferir($novaConta2, 500);

// Deposit 500 into 'novaConta2'
$novaConta2->depositar(500);

// Display the balances of both accounts
echo "Saldo da Conta 1: " . $novaConta1->saldo . "<br>";
echo "Saldo da Conta 2: " . $novaConta2->saldo . "<br>";
