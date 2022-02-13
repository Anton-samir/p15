<?php 
class Mobile {
    public $brand; // Samsung , Apple
    public $color;

    public function ON()
    {
        echo "Welcome from  $this->brand And My Color is $this->color <br>"; 
        // $this => pseudo variable => refer to current object inside class scope
    }

    public function get_instance()
    {
        return $this; // refer to current object inside class scope
    }


    public function print()
    {
        $this->ON();
    }

}

// $samsung = new mobile;
// $samsung->ON("Samsung"); // welcome from samsung

// $apple = new mobile;
// $apple->ON("Apple"); // welcome from apple

$samsung = new mobile;
$samsung->brand = "Samsung";
$samsung->color = "Black";
// print_r($samsung);
// $samsung->ON();
print_r($samsung->get_instance());

$apple = new mobile;
$apple->brand = "Apple";
$apple->color = "White";
// $apple->ON();
print_r($apple->get_instance());
// print_r($apple);

