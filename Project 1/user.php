<?php

class User {
    private $nameUser;
    private $gender;
    private $id;
    private static $count = 0;

    public function __construct($nameUser, $gender) {
        $this->nameUser = $nameUser;
        $this->gender = $gender;
        self::$count++;
        $this->id = self::$count;
    }

    public function getNameUser() {
        return $this->nameUser;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getId() {
        return $this->id;
    }

}

?>