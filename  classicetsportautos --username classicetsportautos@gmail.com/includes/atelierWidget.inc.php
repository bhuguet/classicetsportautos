<?php
include_once 'classes/Car.php';

$xk120Gommage = new Car("JaguarXK120Gommage", "Jaguar XK120 après gommage", "pict");
$typeEGrise = new Car("JaguarTypeEGrise", "Jaguar Type E 4,2l", "pict");
$lotus = new Car("lotus", "lotus", "pict2");

$xk120Roadster = new Car("JaguarXK120Roadster", "Jaguar XK120 Roadster", "pict");
$austinHealey3000 = new Car("AustinHealey3000", "Austin Healey 3000", "pict");
$mgbMark1 = new Car("MGB", "MGB Mark 1", "pict2");
$atelierCars = array($xk120Roadster, $xk120Gommage, $lotus, $typeEGrise, $austinHealey3000, $mgbMark1);

$amilcar = new Car("amilcar", "Amilcar 1928", "pict");
$xk140 = new Car("xk140", "Jaguar XK140", "pict");
$triumphTR3 = new Car("Triumph_TR3", "Triumph TR3", "pict2");
$visitesCars = array($xk140, $amilcar, $triumphTR3);
?>

    <h1>L'atelier</h1>
    <?php
    foreach ($atelierCars as $car) { ?>
        <a rel="example_group" href="<?php echo $car->getImageNameBig("img/atelier/");?>" title="<?php echo $car->getLabel();?>">
        <img class="<?php echo $car->getCssClass();?>" src="<?php echo $car->getImageNameSmall("img/atelier/");?>" alt="" /></a>        
    <?php } ?>

    <p>
	<a class="plus" href="atelier.html">Voir la suite >></a>
    </p>