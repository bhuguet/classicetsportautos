<?php
include_once 'classes/Car.php';

$triumphTR4 = new Car("triumphTR4", "Triumph TR4", "pict");
$fiat500 = new Car("fiat500", "Fiat 500", "pict");
$jaguar = new Car("Jaguar", "Jaguar", "pict2");
$jaguarTypeE42 = new Car("JaguarTypeE4-2", "Jaguar Type E 4.2l", "pict");
$triumphTR6 = new Car("triumphTR6", "Triumph TR6", "pict");
$austinHealeySprite = new Car("AustinHealey_Sprite", "Austin Healey Sprite", "pict2");
$atelierCars = array($triumphTR4, $fiat500, $jaguar, $jaguarTypeE42, $triumphTR6, $austinHealeySprite);

$amilcar = new Car("amilcar", "Amilcar 1928", "pict");
$triumphTR3 = new Car("Triumph_TR3", "Triumph TR3", "pict");
$xk140 = new Car("xk140", "Jaguar XK140", "pict2");
$visitesCars = array($amilcar, $triumphTR3, $xk140);
?>

<div class="col260">
    <h1>L'atelier</h1>
    <?php
    foreach ($atelierCars as $car) { ?>
        <a rel="example_group" href="<?php echo $car->getImageNameBig("img/atelier/");?>" title="<?php echo $car->getLabel();?>">
        <img class="<?php echo $car->getCssClass();?>" src="<?php echo $car->getImageNameSmall("img/atelier/");?>" alt="" /></a>        
    <?php } ?>

    <p>
	D&eacute;couvrez l'atelier en image. <a class="plus" href="atelier.html">Lire la suite >></a>
    </p>
    
    <br/><br/>
    <h1>Ils sont venus chez nous</h1>
    <?php
    foreach ($visitesCars as $car) { ?>
        <a rel="example_group" href="<?php echo $car->getImageNameBig("img/visites/");?>" title="<?php echo $car->getLabel();?>">
        <img class="<?php echo $car->getCssClass();?>" src="<?php echo $car->getImageNameSmall("img/visites/");?>" alt="" /></a>        
    <?php } ?>    

</div>