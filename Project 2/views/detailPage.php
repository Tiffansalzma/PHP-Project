<?php 

require_once('../method/menu.php');
require_once('../method/data.php');

$menuName = $_GET['name'];
$drink = Menu::findByName($drinks, $menuName);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="widht=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <link rel="stylesheet" href="../styles/detailPage.css">
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
            <div class="detail-produk">
                <div>
                    <img src="<?php echo $drink->getImage() ?>" alt="" class="product-img">
                </div>
                <div class="product-info">
                    <h3><?php echo $drink->getName() ?></h3>
                    <p><?php echo $drink->getSlogan()?></p>
                    <h2>Rp <?php echo $drink->getPrice() ?>,-</h2>
                </div>
            </div> 
            <div class="deskripsi">
                <h3>Description</h3>
                <p><?php echo $drink->getDescription() ?></p>
                <a href="produk.php">Back to our products</a>
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