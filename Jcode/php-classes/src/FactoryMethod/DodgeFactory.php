<?php

namespace Jcode\FactoryMethod;

use Jcode\FactoryMethod\Product\{
    CarroProduct,DodgeCharger, DodgeDart
};


class DodgeFactory implements CarroFactory{
    
    public function createCar(string $modelCar):CarroProduct{
        
        if($modelCar =="charger"){
            return new DodgeCharger();
        }elseif($modelCar == "dart"){
            return new DodgeDart();
        }else{
            throw new \Exception("Modelo de carro \{$modelCar}\ não existe no sistema");
        }
        
    }
    
}

?>