<?php
namespace Jcode\FactoryMethod\Product;


class DodgeDart implements CarroProduct {
    
    public function speedUp(){
        echo "Acelerando Dodge Dart \n";
    }
    
    public function stop(){
        echo "Frear Dodge Dart \n";
    }
    
    public function shiftGears(){
        echo "Trocando marcha Dodge Dart \n";
    }
}

?>