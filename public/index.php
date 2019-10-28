<?php
require __DIR__ .'/../vendor/autoload.php';

$wayTwo = new \App\PedestrianWay();
$mustang = new \App\Car("black", 2, "gas");
$rockrider = new \App\Bicycle('Brown', 1);
$bike21 = new \App\Bicycle('Red', 1);
$wayThree = new \App\ResidentialWay();
$homerCar = new \App\Car("pink", 4, "gas");
$wayTwo->addVehicle($mustang);

//$mustang not allowed on $wayTwo which is pedestrian, return message
echo $wayTwo->addVehicle($mustang);

//$rockrider allowed on $wayTwo which is pedestrian, it can be added to array
$wayTwo->addVehicle($rockrider);
$wayTwo->addVehicle($bike21);
var_dump($wayTwo);



//$homerCar allowed on $wayThree which is a motorway, it can be added to array
$wayThree->addVehicle($homerCar);
var_dump($wayThree);




