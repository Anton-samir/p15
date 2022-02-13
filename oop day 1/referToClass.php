<?php

class User
{
    public $name; // property => variable => ahmed , mohamed
    public static $status = "Active"; // refer to class
    public const bonus = 50; // refer to ? refer to class

    public function print()
    {
        echo $this->name;
        $this->logout();

        echo User::bonus;
        echo User::$status;
        User::staticLogout();
        #################### Refer To Class Using Self ####################
        echo self::bonus; // User
        echo self::$status;
        self::staticLogout();
        ################# Refer To Class Using Static ####################
        echo static::bonus; // User
        echo static::$status;
        static::staticLogout();

        // what is difference between self Vs Static ? 
    }


    public function logout()
    {
        echo "logout <br>";
    }

    public static function staticLogout()
    {
        echo "logout staticlly <br>";
    }
}

$galal = new User;
echo $galal->name;
$galal->logout();

User::$status;
User::bonus;
User::staticLogout();
