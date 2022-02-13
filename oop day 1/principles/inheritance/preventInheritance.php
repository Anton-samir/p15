<?php 
# parent
class person {
    public $id;
    public $name;
    public $email;
    public $password;
    public final function login()
    {
        echo "login <br>";
    }
}

final class user extends person {

    public function login()
    {
        echo "login (email & password) <br>";
    }
}

final class admin extends person {

    public function login()
    {
        echo "login (phone & password) <br>";
    }
}
