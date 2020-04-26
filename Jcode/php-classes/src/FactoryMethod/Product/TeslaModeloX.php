<?php
namespace Jcode\FactoryMethod\Product;


class TeslaModeloX implements CarroProduct {
    
    public function speedUp(){
        echo "Acelerando Tesla Modelo X\n";
    }
    
    public function stop(){
        echo "Frear Tesla Modelo X\n";
    }
    
    public function shiftGears(){
        echo "Trocando marcha Tesla Model X\n";
    }
}

?>