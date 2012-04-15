<?php
include_once 'classes/Car.php';

$xk120Gommage = new Car("JaguarXK120Gommage_b.jpg", "Jaguar XK120 après gommage", "pict");
$typeEGrise = new Car("JaguarTypeEGrise_b.jpg", "Jaguar Type E 4,2l", "pict");
$lotus = new Car("lotus_b.jpg", "lotus", "pict2");

$xk120Roadster = new Car("JaguarXK120Roadster_b.jpg", "Jaguar XK120 Roadster", "pict");
$austinHealey3000 = new Car("AustinHealey3000_b.jpg", "Austin Healey 3000", "pict");
$mgbMark1 = new Car("MGB_b.jpg", "MGB Mark 1", "pict2");
$atelierCars = array($xk120Roadster, $xk120Gommage, $lotus, $typeEGrise, $austinHealey3000, $mgbMark1);

$amilcar = new Car("amilcar_b.jpg", "Amilcar 1928", "pict");
$xk140 = new Car("xk140_b.jpg", "Jaguar XK140", "pict");
$triumphTR3 = new Car("Triumph_TR3_b.jpg", "Triumph TR3", "pict2");
$visitesCars = array($xk140, $amilcar, $triumphTR3);
?>

    <h1><?php echo $latelier_title; ?></h1>
    <?php
    foreach ($atelierCars as $car) { ?>
        <a rel="example_group" href="<?php echo $car->getImage("/img/atelier/");?>" title="<?php echo $car->getLabel();?>">
        <img class="<?php echo $car->getCssClass();?>" src="<?php echo $car->getResizedImage("/img/atelier/",80);?>" /></a>        
    <?php } ?>

    <p>
	<a class="plus" href="<?php echo $menu_atelier_file; ?>"><?php echo $voir_la_suite; ?></a>
    </p>