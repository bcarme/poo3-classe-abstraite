<?php


namespace App;


final class Motorway extends Highway
{


    public function addVehicle(Vehicle $object){
        if ($object instanceof Bicycle || $object instanceof Skateboard)
        {
            return "not allowed";
        } else {
         $this->setCurrentVehicles($object);
}
    }
}