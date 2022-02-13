<?php
// procedural programming 
// code => line by line or block by block

$number1 = 1;
$number2 = 5;

function sumNumbers ($num1,$num2){
    return $num1 + $num2;
}

sumNumbers($number1,$number2);

// echo "hello";


// oop => object oriented programming
// class , object

// other languages => c++ , java , python , ...

// features => 1. More Dynamic , 2. More Secure , 3. Usable scalable , 4. easy to maintain


// principles => 1. inheritance , 2. encapsulation , 3. abstraction , 4. polymorphism

// local scope
// class App {
    // blueprint which group similar tasks => to organize application structure
// }
# user class
// function login

// function logout

// function register

# order class
// function makeOrder 

// function cancelOrder 

#product class
// function getAllProducts 

// function getMostRecentProducts 

# 
// properties => variables , methods => functions 
// access modifiers (public , protected , private)
class User {
    
    public $id = 5;
    public $name;
    public $password;
    public $email;

    public function login()
    {
        echo "login <br>";
    }

    public function logout()
    {
        if(1 > 2){

        }else{

        }

        echo "logout <br>";
    }

    public function register()
    {
        for ($i=0; $i < 5; $i++) { 
            # code...
        }


        echo "register <br>";
    }

}

# object => access class scope (local) into global scope
$object = new User; // instance 
$object->login();
$object->logout();
$object->register();
// echo $object->id;
$object->name = "ahmed";
$object->password = 1232456;
$object->email = "ahmed@gmail.com";
print_r($object);