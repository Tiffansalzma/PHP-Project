<?php 

class Store{
    private $location;
    private $detailLoc;

    public function __construct($location, $detailLoc){
        $this->location = $location;
        $this->detailLoc = $detailLoc;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getDetailLoc(){
        return $this->detailLoc;
    }

}

?>