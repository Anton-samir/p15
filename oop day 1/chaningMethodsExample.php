<?php 

class car {
    public $color ;

    public function increaseBlack()
    {
        $this->color .= " + Black";
        return $this;
    }

    public function increaseWhite()
    {
        $this->color .= " + White";
        return $this;
    }
}

$car = new car;
$car->color = 'red';
$car->increaseBlack()->increaseBlack()->increaseWhite()->increaseBlack();
echo $car->color;