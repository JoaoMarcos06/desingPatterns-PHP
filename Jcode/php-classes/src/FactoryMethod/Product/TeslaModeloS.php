<?php
namespace Jcode\FactoryMethod\Product;


class TeslaModeloS implements CarroProduct {
    
    public function speedUp(){
        echo "Acelerando Tesla Modelo S\n";
    }
    
    public function stop(){
        echo "Frear Tesla Modelo S\n";
    }
    
    public function shiftGears(){
        echo "Trocando marcha Tesla Model S\n";
    }
}

?>