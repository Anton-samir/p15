<?php 
class UserWallet {
    public $balance = 0;
    public const bonus = 10;

    public function addBonusToBalance()
    {
        $this->balance += self::bonus;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposite($depositeValue)
    {
        $this->balance += $depositeValue;
    }

    public function withdraw($withdrawValue)
    {
        $this->balance -= $withdrawValue;
    }
}

$newUser = new UserWallet;
$newUser->addBonusToBalance();
echo $newUser->getBalance() . '<br>';
$newUser->deposite(990);
echo $newUser->getBalance() . '<br>';
$newUser->withdraw(1000);
echo $newUser->getBalance() . '<br>';
