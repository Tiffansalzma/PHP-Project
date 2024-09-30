<?php 

class Menu{
    protected static $sumMenu = 0;
    protected $nameMenu;
    protected $price;
    protected $imageMenu;
    private $orderCount = 0;

    public function __construct($nameMenu, $price, $imageMenu){
        $this->nameMenu = $nameMenu;
        $this->price = $price;
        $this->imageMenu = $imageMenu;
        self::$sumMenu++;
    }

    public static function getSumMenu(){
        return self::$sumMenu;
    }

    public function getNameMenu(){
        return $this->nameMenu;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImageMenu(){
        return $this->imageMenu;
    }

    public function getTaxIncludePrice(){
        return round($this->price * 1.0725,2);
    }

    public function getOrderCount(){
        return $this->orderCount;
    }

    public function setOrderCount($orderCount){
        $this->orderCount = $orderCount;
    }

    public function getTotalPrice(){
        return $this->getTaxIncludePrice() * $this->orderCount;
    }

    public function getReviews($reviews){
        $reviewsForMenu = array();
        foreach($reviews as $review){
            if($review->getMenuName() == $this->nameMenu){
                $reviewsForMenu[] = $review;
            }
        }
        return $reviewsForMenu;
    }

    public static function findbyNameMenu($menus, $nameMenu){
        foreach($menus as $menu){
            if($menu->getNameMenu() == $nameMenu){
                return $menu;
            }
        }
    }

}

?>