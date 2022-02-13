<?php 

# access modifiers (public - private - protected)
#public (global scope- child scope- class scope)
#protected ( child scope - class scope )
#private (class scope)
class wallet {
    private $balance = 0;
    public function getBalance()
    {
       echo $this->balance;
    }
}


class transactions extends wallet {

    public function getBalance()
    {
       echo $this->balance;
    }
}

// global scope
$wallet = new wallet;
// echo $wallet->balance;

// child scope
$transactions = new transactions;
// $transactions->getBalance();

//class scope
$wallet->getBalance();

// parent => super class
// child => sub class