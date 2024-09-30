<?php

require_once('menu.php');

class Food extends Menu {
    private $spiciness;

    public function __construct($nameMenu, $price, $imageMenu, $spiciness) {
        parent::__construct($nameMenu, $price, $imageMenu);
        $this->spiciness = $spiciness;
    }

    public function getSpiciness() {
        return $this->spiciness;
    }
}

?>