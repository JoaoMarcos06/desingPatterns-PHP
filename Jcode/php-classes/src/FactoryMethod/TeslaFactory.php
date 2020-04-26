<?php

namespace Jcode\FactoryMethod;

use Jcode\FactoryMethod\Product\{
    CarroProduct,TeslaModeloS, TeslaModeloX
};


class TeslaFactory implements CarroFactory{
    
    public function createCar(string $modelCar):CarroProduct{
        
        if($modelCar =="modelo_s"){
            return new TeslaModeloS();
        }elseif($modelCar == "modelo_x"){
            return new TeslaModeloX();
        }else{
            throw new \Exception("Modelo de carro \{$modelCar}\ não existe no sistema");
        }
        
    }
    
}

?>