<?php

class Review {
    private $menuName;
    private $userId;
    private $review;

    public function __construct($menuName, $userId, $review) {
        $this->menuName = $menuName;
        $this->userId = $userId;
        $this->review = $review;
    }

    public function getMenuName() {
        return $this->menuName;
    }

    public function getUser($users) {
        foreach ($users as $user) {
            if ($user->getId() == $this->userId) {
                return $user;
            }
        }
    }

    public function getReview() {
        return $this->review;
    }


}

?>