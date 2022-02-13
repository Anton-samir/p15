<?php


class person {
    public $id;
    public $name;
}

class user extends person {
    public $email;
    public $password;
}


class admin extends user {
    public $phone;
}


class employee extends admin {
    public $nationalId;
}

$employee = new employee;
print_r($employee);