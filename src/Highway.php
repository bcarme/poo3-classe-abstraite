<?php


namespace App;

abstract class Highway
{
    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;
    protected $object;

    abstract protected function addVehicle(Vehicle $object);

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }


    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles[] = $currentVehicles;
    }


    public function getNbLane()
    {
        return $this->nbLane;
    }


    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }


    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }


    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}