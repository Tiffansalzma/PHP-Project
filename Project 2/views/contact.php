<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="widht=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/contact.css">
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
                        <li><a href="produk.php">Products</a></li>
                        <li><a href="store.php">Store</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Content Field 1-->

    <!--Content Field 2-->

    <div class="content2">
        <div class="container">
            <h3>How can we help?</h3>
            <div class="field">
                <form method="post" action="confirm.php">
                    <div class="input">
                        <p>Name</p>
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="input">
                        <p>Email</p>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="input">
                        <p>Phone Number</p>
                        <input type="text" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="input">
                        <p>Subject</p>
                        <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <div class="text-area">
                        <p>Massage</p>
                        <textarea name="body"></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Submit">
                    </div>
                    
                </form>                
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