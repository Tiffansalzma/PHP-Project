<?php

require_once('menu.php');
require_once('data.php');

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Café PHP SuN</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="menu-wrapper container">
            <h1 class="logo">Cafe PHP SuN</h1>
            <h3>Number of Menus: <?php echo Menu::getSumMenu()?></h3>
            <form action="confirm.php" method="post">
                <div class="menu-items">
                    <?php foreach ($menus as $menu) :?>
                        <div class="menu-item">
                            <img src="<?php echo $menu->getImageMenu() ?>" class="menu-item-image">
                            <h3 class="menu-item-name">
                                <a href="detail.php?name=<?php echo $menu->getNameMenu() ?>">
                                    <?php echo $menu->getNameMenu() ?>
                                </a>
                            </h3>
                            <?php if ($menu instanceof Drink): ?>
                                <p class="menu-item-type"><?php echo $menu->getType() ?></p>
                            <?php else: ?>
                                <?php for ($i=0; $i<$menu->getSpiciness(); $i++): ?>
                                    <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class="icon-spiciness">
                                <?php endfor ?>
                            <?php endif ?>
                            <p class="price">$<?php echo $menu->getTaxIncludePrice() ?> (Include Tax)</p>
                            <span>Qty: </span>
                            <input type="number" min= "0" value="0" name="<?php echo $menu->getNameMenu() ?>">
                        </div>
                    <?php endforeach?>
                </div>
                <input type="submit" value="Order">
            </form>            
        </div>
    </body>
</html>