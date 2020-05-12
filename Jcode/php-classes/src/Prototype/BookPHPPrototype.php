<?php

namespace Jcode\Prototype;

use Jcode\Prototype\BookPrototype;

class BookPHPPrototype extends BookPrototype{
    
    
    public function __construct()
    {
        $this->setSubject("PHP");
    }
    
    public function __clone()
    {
        echo "Livro PHP clonado";
    }
    
}

?>