<?php

class user {
    private $password; // hashed
    private $gender; // female / male
    private $name;

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password,PASSWORD_BCRYPT);
    }

    public function getGender()
    {
        if(!empty($this->gender)){
            return $this->gender == 'm' ? 'male' : 'female';
        }
    }

    public function setGender($gender)
    {
        $genders =  ['f','m'];
        if(in_array($gender,$genders)){
            $this->gender = $gender;
        }
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        
        $this->name = $name;

        return $this;
    }
}


$user = new user;
$user->setPassword(123456);
echo $user->getPassword() .'<br>';
$user->setGender('m');
echo $user->getGender();