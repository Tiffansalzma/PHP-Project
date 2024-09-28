<?php

require_once('drink.php');
require_once('food.php');
require_once('user.php');
require_once('review.php');

$juice = new Drink('Juice', 3, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'Cold');
$coffee = new Drink('Coffee', 6,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'Hot');
$gulai = new Food('Gulai', 14,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
$pasta = new Food('Pasta',18,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

$menus = array($juice, $coffee, $gulai, $pasta);

$user1 = new User('Fahri','Man');
$user2 = new User('Sunarya','Man');
$user3 = new User('Ica','Woman');
$user4 = new User('Indah','Woman');

$users = array($user1, $user2, $user3, $user4);

$review1 = new Review($juice->getNameMenu(), $user1->getId(), 'Yummy');
$review2 = new Review($gulai->getNameMenu(), $user1->getId(), 'Sangat sehat');
$review3 = new Review($coffee->getNameMenu(), $user2->getId(), 'Wanginya harum');
$review4 = new Review($pasta->getNameMenu(), $user2->getId(), 'Sausnya enak :)');
$review5 = new Review($juice->getNameMenu(), $user3->getId(), 'Hanya jus jeruk biasa');
$review6 = new Review($gulai->getNameMenu(), $user3->getId(), 'Rasanya enak untuk harganya');
$review7 = new Review($coffee->getNameMenu(), $user4->getId(), 'Kepahitannya cukup.');
$review8 = new Review($pasta->getNameMenu(), $user4->getId(), 'Banhan yang digunakan berkualitas.');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>