<?php
namespace app\requests;

class RgisterRequest {
    private $password;
    private $password_confirmatoin;
    private $email;
    private $phone;

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of password_confirmatoin
     */ 
    public function getPassword_confirmatoin()
    {
        return $this->password_confirmatoin;
    }

    /**
     * Set the value of password_confirmatoin
     *
     * @return  self
     */ 
    public function setPassword_confirmatoin($password_confirmatoin)
    {
        $this->password_confirmatoin = $password_confirmatoin;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function passwordValidation() :array
    {
        $errors = [];
        # required 
        if(empty($this->password)){
            $errors['pasword-required'] = "Password Is Required";
        }
        # no validation errors
        if(empty($errors)){
            #,regex 
            if(!preg_match('//',$this->password)){
                $errors['pasword-regex'] = "Password ";
            }
            
            if(empty($errors)){
                # confirmed
                if($this->password != $this->password_confirmatoin){
                    $errors['pasword-confirmed'] = "Password dosen't match password confirmation";
                }
            }
        }
        return $errors;
    }

    public function passwordConfirmation()
    {
        # // required 
    }

    public function emailValidaiton()
    {
        # // required , regex , unique
    }

    public function phoneValidation()
    {
        #// required , regex , unique
    }
}