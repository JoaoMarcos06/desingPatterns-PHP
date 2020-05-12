<?php
namespace Jcode\Prototype;


abstract class BookPrototype{
    
    protected $title;
    protected $subject;
    protected $titleName;
    
    abstract public function __clone();
    
    public function getTitle():string
    {
        return $this->title;
    }
    
    public function setTitle(string $title):BookPrototype
    {
        $this->title = $title;
        return $this;
    }
    
    public function getSubject():string
    {
        return $this->subject;
    }
    
    public function setSubject(string $subject):BookPrototype
    {
        $this->subject = $subject;
        return $this;
    }
    
    public function getTitleName():string
    {
        return $this->titleName;
    }
    
    public function setTitleName(string $titleName):BookPrototype
    {
        $this->setTitleName = $titleName;
        return $this;
    }
    
    
}

?>