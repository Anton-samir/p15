<?php 

class person {
    public $id;
    public $name;
    public $email;
    public $Password;
    public function uploadPhoto()
    {
        echo "upload photo from person";
    }
}

trait mediaV1 {
    public function uploadPhoto()
    {
        echo "upload photo from media v1";
    }
}
// 2 metods (trait , class) => highest priority (trait)
class user extends person {
    use mediaV1;
}


$user = new user;
$user->uploadPhoto();