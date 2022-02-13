<?php


class person {
    public function __construct()
    {
        echo "Hello from person <br>";
    }

    public function __destruct()
    {
        echo "Bye From Person <br>";
    }
}


class user extends person {
    public function __construct()
    {
        echo "Hello from user <br>";
    }
    public function login()
    {
        // echo "login <br>";
        $this->__construct();
        parent::__construct();
    }
}

class car {
    public function __construct()
    {
        echo "Hello from car <br>";
    }

    public function __destruct()
    {
        echo "Bye From car <br>";
    }
}

// __construct => when you take an instance from class  , __destruct => at the end of file

$user = new user;
$user->login();
echo "Hello World <br>";
new car;