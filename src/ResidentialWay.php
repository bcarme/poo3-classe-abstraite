<?php


namespace App;


final class ResidentialWay extends Highway
{

    public function addVehicle(Vehicle $object)
    {
        if ($object instanceof Vehicle) {
            $this->setCurrentVehicles($object);
        }
    }
}