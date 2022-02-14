<?php 

trait mediaV2 {
    public function uploadPhoto()
    {
        echo "upload photo from media v2";
    }
}

trait mediaV1 {
    public function uploadPhoto()
    {
        echo "upload photo from media v1";
    }
}
// 2 metods (trait , trait) => collision
class user {
    use mediaV1,mediaV2{
        mediaV1::uploadPhoto AS uploadPhotoMediaV1;
        mediaV2::uploadPhoto insteadof mediaV1;
    } 
}


$user = new user;
$user->uploadPhotoMediaV1();