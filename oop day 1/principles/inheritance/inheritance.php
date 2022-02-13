<?php 
// parent class
class mobile {
    public $name;
    public $color;
    public $price;
    public $ram;
    public $storage;
    public $battery;
    public $charger = false;
    public static $madeIn = 'china';
    public const brand = '';
    public $fingerPrint = true;
}

class samsung extends mobile {
    public $charger = true;
    public const brand = 'Samsung';
}

class Apple extends mobile {
    public const brand = 'Apple';
    public $faceId = true;
}

class Oppo extends mobile {

}

$newSamsungMobile = new samsung;
$newSamsungMobile->name = "Note 20";
$newSamsungMobile->price = 15000;
$newSamsungMobile->color = 'red';
$newSamsungMobile->ram = 8;
$newSamsungMobile->storage = 128;
$newSamsungMobile->battery = 5000;

$newAppleMobile = new Apple;
$newOppoMobile = new Oppo;

print_r($newSamsungMobile);
print_r($newAppleMobile);
print_r($newOppoMobile);


