<?php

class Eat{
    private $type;
    private $name;
    
    public function __construct($type, $name){
        $this->setName($name);
        $this->setType($type);
    }
        
    public function getName() {
        return $this->name;
    }
    
    public function getType() {
        return $this->type;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setType($type) {
        $this->type = $type;
    }
}

$apple = new Eat('Fruit', 'Apple');

echo $apple->getName() . '<br>';
echo $apple->getType() . '<br>';

$apple->setName('Orange');
$apple->setType('Vegetable');

echo $apple->getName() . '<br>';
echo $apple->getType() . '<br>';