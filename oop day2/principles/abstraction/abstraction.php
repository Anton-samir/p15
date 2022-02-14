<?php 

abstract class person {
    public $id;
    public $name;
    public $gender;
    public $password;
    public abstract function login();
    protected abstract function forgetPassword();
    // CONSTANT
    // properties
    // static propertoes
    // static methods
    // methods
}

class user extends person {
    public function login (){
        echo "email & password";
    }
    public  function forgetPassword(){

    }
}

class admin extends person{
    public function login (){
        echo "phone & password";
    }
    public  function forgetPassword(){
        
    }
}

class employee extends person {

}
