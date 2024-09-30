<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="widht=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/confirm.css">
</head>
<body>
    <!--Content Field 1-->

    <div class="content1">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../image/Logo White.png" alt="" width="335px" height="67px">
                </div>
            </div>
        </div>
    </div>

    <!--Content Field 1-->

    <!--Content Field 2-->

    <div class="content2">
        <div class="container">
            <h3>Thank you for contacting us!</h3>
            <div class="field">
                <div class="input">
                    <p class="title">Name</p>
                    <p><?php echo $_POST['name']; ?></p>
                </div>
                <div class="input">
                    <p class="title">Email</p>
                    <p><?php echo $_POST['email']; ?></p>
                </div>
                <div class="input">
                    <p class="title">Phone Number</p>
                    <p><?php echo $_POST['phone']; ?></p>
                </div>
                <div class="input">
                    <p class="title">Subject</p>
                    <p><?php echo $_POST['subject']; ?></p>
                </div>
                <div class="text-area">
                    <p class="title">Massage</p>
                    <p><?php echo $_POST['body']; ?></p>
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