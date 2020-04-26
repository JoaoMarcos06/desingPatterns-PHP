<?php
namespace Jcode\FactoryMethod\Product;


class DodgeCharger implements CarroProduct {
    
    public function speedUp(){
        echo "Acelerando Dodge Charger \n";
    }
    
    public function stop(){
        echo "Frear Dodge Charger \n";
    }
    
    public function shiftGears(){
        echo "Trocando marcha Dodge Charger\n";
    }
}

?>