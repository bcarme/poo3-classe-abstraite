<?php

namespace App;

class Car extends Vehicle {
    private $fuelType;
    private $fuelLevel;

const ALLOWED_ENERGIES =[
    'gas',
    'electric',
];

public function __construct($color, $nbSeats, $fuelType)
{
    parent::__construct($color, $nbSeats);
    $this->setFuelType($fuelType);
}
public function start()
  {
    $this->currentSpeed = 0;
    return " Start ! ";
  }
public function getFuelType()
    {
        return $this->fuelType;
    }
public function getFuelLevel()
    {
        return $this->fuelLevel;
    }

public function setFuelType($fuelType)
    {
        if (in_array($fuelType, self::ALLOWED_ENERGIES))
        $this->fuelType = $fuelType;
    }
public function setFuelLevel($fuelLevel)
    {
        $this->fuelLevel = $fuelLevel;
    }
}