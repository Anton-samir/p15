<?php

class contract {
    public $name;
    public $id;
    public $position;
    public $salary;
    public $positionType;
    public $startDate;
    public $endDate;
    public $ensurance = true;

    public function getEmployee()
    {
        return $this;
    }
}

$firstEmployee = new contract;
$firstEmployee->id = 290020305123456;
$firstEmployee->name = "rofida";
$firstEmployee->position = "Back-end Developer";
$firstEmployee->positionType = "Full-Time";
$firstEmployee->salary = 7000;
$firstEmployee->startDate = date("Y-m-d");
$firstEmployee->endDate = date("Y-m-d",strtotime('+1 year'));
print_r($firstEmployee->getEmployee());

$secondEmployee = new contract;
$secondEmployee->id = 290020305987654;
$secondEmployee->name = "Marwa";
$secondEmployee->position = "Back-end Developer";
$secondEmployee->positionType = "Full-Time";
$secondEmployee->salary = 7000;
$secondEmployee->startDate = date("Y-m-d");
$secondEmployee->endDate = date("Y-m-d",strtotime('+3 year'));
$secondEmployee->ensurance = false;
print_r($secondEmployee);


$thirdEmployee = new contract;
$thirdEmployee->id = 29002030554555;
$thirdEmployee->name = "Ahmed";
$thirdEmployee->position = "Back-end Developer";
$thirdEmployee->positionType = "Part-Time";
// $secondEmployee->salary = 7000;
$thirdEmployee->salaryPerHour = 50;
$thirdEmployee->startDate = date("Y-m-d");
$thirdEmployee->endDate = date("Y-m-d",strtotime('+6 months'));
$thirdEmployee->ensurance = false;
print_r($thirdEmployee);