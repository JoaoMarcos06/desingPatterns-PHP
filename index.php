<?php

require_once("vendor/autoload.php");


use Jcode\Singleton\LogSingleton;
use Jcode\FactoryMethod\TeslaFactory;
use Jcode\FactoryMethod\DodgeFactory;



/* SINGLETON TEST */
/*$instance = LogSingleton::getInstance();
$newInstance = LogSingleton::getInstance();

if($instance ===$newInstance){
    echo "As instâncias são exatamente as mesmas !!";
}*/

/* FACTORY METHOD TEST*/

/*try{
    
    $teslaFactory = new TeslaFactory();
    $dodgeFactory = new DodgeFactory();
    
    $teslaModelS =  $teslaFactory->createCar("modelo_s");
    $teslaModelX =  $teslaFactory->createCar("modelo_x");
    
    $dodgeCharger = $dodgeFactory->createCar("charger");
    $dodgeDart =  $dodgeFactory->createCar("dart");
    
    echo $teslaModelS->speedUp();
    echo $teslaModelS->stop();
    echo $teslaModelS->shiftGears();
    
    echo $teslaModelX->speedUp();
    echo $teslaModelX->stop();
    echo $teslaModelX->shiftGears();
    
    echo $dodgeCharger->speedUp();
    echo $dodgeCharger->stop();
    echo $dodgeCharger->shiftGears();
    
    echo $dodgeDart->speedUp();
    echo $dodgeDart->stop();
    echo $dodgeDart->shiftGears();
    
    
}catch(Exception $e){
    echo $e->getMessage();
}*/




?>