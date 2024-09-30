<?php 

class Menu{
    private $name;
    private $price;
    private $image;
    private $slogan;
    private $description;

    public function __construct($name, $price, $image, $slogan, $description){
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->slogan = $slogan;
        $this->description = $description;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getSlogan(){
        return $this->slogan;
    }

    public function getDescription(){
        return $this->description;
    }


    public static function findByName($drinks, $name){
        foreach($drinks as $drink){
            if($drink->getName() == $name){
                return $drink;
            }
        }
    }
}

?>