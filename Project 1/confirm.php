<?php require_once('data.php');?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Confirm Order </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="order-wrapper">
            <h2>Cart</h2>
            <?php $totalPayment = 0 ?>
            <?php foreach ($menus as $menu): ?>
                <?php 
                    $orderCount = $_POST[$menu->getNameMenu()];
                    $menu->setOrderCount($orderCount);
                    $totalPayment += $menu->getTotalPrice(); 
                ?>
                <p class="order-amount">
                    <?php echo $menu->getNameMenu() ?>
                    x
                    <?php echo $orderCount ?>
                </p>
                <p class="order-price">$<?php echo $menu->getTotalPrice() ?></p>
            <?php endforeach ?>
            <h3>Total Price: $<?php echo $totalPayment ?></h3>
        </div>
    </body>
</html>