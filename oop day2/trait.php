<?php 

trait media {
    // public $gender;
    public function uploadPhoto()
    {
        echo "upload photo <br>";
    }
    public function uploadExcel()
    {
        echo "upload Excel <br>";
    }
    // public static function x()
    // {
    //     # code...
    // }
    // public const y = 5;
    // public static $x;
}

trait data {
    public function exportData()
    {
        echo "export data <br>";
    }

    public function importData()
    {
        echo "import Data <br>";
    }
}

trait generalTrait {
    use data,media;
}

class user {
   use generalTrait;
}

$user = new user;
$user->uploadPhoto();

class product {
    use generalTrait;
}

$product = new product;
$product->uploadExcel();