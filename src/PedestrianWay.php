<?php


namespace App;


final class PedestrianWay extends Highway
{

    public function addVehicle(Vehicle $object)
    {

        if ($object instanceof Bicycle || $object instanceof Skateboard) {
            $this->setCurrentVehicles($object);
        } else {
            return "not allowed";
        }

    }
}