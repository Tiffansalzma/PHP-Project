<?php

require_once('menu.php');

class Drink extends Menu{
    private $type;

    public function __construct($nameMenum, $price, $imageMenu, $type){
        parent::__construct($nameMenum, $price, $imageMenu);
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }
}

?>