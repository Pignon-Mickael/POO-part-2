<?php 

require_once 'bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('black', 1);

$car = new Car('orange', 4, 'fuel');

$truck = new Truck('red', 2, 'fuel', 10);

// Moving bike
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br> <br>';


//moving car
echo $car->start() . '<br>';
echo $car->accelerate();
echo '<br> Vitesse actuelle de la voiture : ' .$car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->stop();
echo '<br> Vitesse actuelle de la voiture : ' .$car->getCurrentSpeed() . ' km/h' . '<br> <br>';


// moving Truck
echo $truck->start() . '<br>';
echo $truck->accelerate();
echo '<br> Vitesse actuelle du camion : ' .$truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->stop();
echo '<br> Vitesse actuelle du camion : ' .$truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->loading();


