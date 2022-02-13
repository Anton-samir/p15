<?php 

class person {
    public $id;
    public $name;
    public $email;
    public $password;
    public const type = 'employee'; // person

    public function login()
    {
        echo "login (email & password) <br>";
    }

    
    public function logout()
    {
        echo "logout <br>";
    }
}

class user extends person {

}

class seller extends person {
    public $nationalId;
    public $phone;
    public $productType;
    public function login()
    {
        echo "login (phone & password) <br>";
    }
}

class admin extends person {
    public const type = 'manger'; // admin
    public function getType()
    {
        echo admin::type .'<br>'; // manger
        echo person::type .'<br>'; // employee
        echo self::type .'<br>'; // manger
        echo parent::type .'<br>'; // employee;
    }
}

// $person = new seller;
// $person->login();

$admin = new admin;
$admin->getType();

// persons => users
// perosns => sellers
// persons => admins

// echo admin::type;