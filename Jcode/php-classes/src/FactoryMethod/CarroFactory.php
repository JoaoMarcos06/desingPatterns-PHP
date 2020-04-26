<?php

namespace Jcode\FactoryMethod;

use Jcode\FactoryMethod\Product\CarroProduct;


interface  CarroFactory{
    
    public function createCar(string $modelCar):CarroProduct;
    
}


?>