<?php include "db.php"
    ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <!--   <script>
        $(document).ready(function() {
                $('.flexslider').flexslider({
                        animation: "slide",
                        animationLoop: true,
                        pausePlay: true,
                        mousewheel: false,
                        rtl: true,
            });
        });
    </script>-->

</head>

<body>

    <div class="header clearfix">
        <div class="topheader">
            <div class="wrapper">
                <ul class="right-content">
                    <li class="search"><input type="search" placeholder="Search" /> </li>
                    <li class="cart"><a href="viewcart.php">My cart</a></li>
                    <li class="email"><a href="#">Send us an Email</a></li>
                </ul>
            </div>
        </div>

        <div class="bottomheader">
            <div class="wrapper clearfix">
                <h1 class="logo"> <a href="#"><img src="../ecomm/company%20logo.jpg"></a></h1>

                <ul class="menu">
                   <li><a href="#">Catalog</a>
                      
                       
                        <ul class="w3-dropdown-content w3-bar-block w3-border">
                            <li><a href="admin_category.php" class="w3-bar-item w3-button let">Category</a></li>
                            <li><a href="admin_product2.php" class="w3-bar-item w3-button let">Product</a></li>
            
                        </ul>


                    </li>
                   
                    
                    <li><a href="manage_orders.php">Orders</a></li>
                    <li><a href="#">My wishlist</a></li>
                    <li><a href="new__arrival.php">New Arrival</a></li>
                    
                    <li><a href="logout.php">Log Out</a>
                     <li>Welcome, Admin </li>

                </ul>

            </div>
        </div>

    </div>