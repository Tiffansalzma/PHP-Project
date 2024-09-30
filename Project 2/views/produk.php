<?php 

require_once("../method/data.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="widht=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../styles/produk.css">
</head>
<body>
    <!--Content Field 1-->

    <div class="content1">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../image/Logo White.png" alt="" width="335px" height="67px">
                </div>
                <div class="list-nav">
                    <ul>
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="store.php">Store</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Content Field 1-->

    <!--Content Field 2-->

    <div class="content2">
        <div class="container">
            <div class="product">
                <h3>Our Coffee Based Products</h3>
                <p>Locally sourced best ingredients = best coffee.</p>
                <div class="menu">
                    <?php foreach ($drinks as $drink): ?>
                        <div class="menu-box">
                            <img src="../image/Coffee background.png" alt="" srcset="">
                            <p class="deskripsi">
                                <a href="detailPage.php?name=<?php echo $drink->getName()?>">
                                    <?php echo $drink->getName()?>
                                </a>
                            </p>
                            <p class="price">Rp <?php echo $drink->getPrice()?>,-</p>
                            <div class="product-img">
                                <img src="<?php echo $drink->getImage()?>" alt="">
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
            
        </div>
    </div>

    <!--Content Field 2-->

    <!--Footer-->

    <footer>
        <div class="container">
                <div class="logo">
                    <img src="../image/Logo White.png" alt="" class="logo-img">
                    <div class="contact">                        
                        <a href="#"><img src="../image/MAIL ICON.svg" alt=""></a>
                        <a href="#"><img src="../image/PHONE ICON.svg" alt=""></a>
                    </div>
                </div>
                <div class="list1">
                    <ul>
                        <li class="active">Product</li>
                        <li>Coffee Based</li>
                        <li>Non-Coffee</li>
                        <li>Tea Based</li>
                    </ul>
                </div>
                <div class="list2">
                    <ul>
                        <li class="active">Store</li>
                        <li>Location</li>
                    </ul>
                </div>
                <div class="list3">
                    <ul>
                        <li class="active">Contact</li>
                        <li>Customer Service</li>
                    </ul>
                </div>
        </div>
        
    </footer>

    <!--Footer-->
</body>
</html>