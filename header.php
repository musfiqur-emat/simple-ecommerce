<?php include "db.php";
    session_start();
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
                   
                    <li><a href="index.php">Home</a></li>
                    <li><a href="categories2.php">Categories</a></li>
                    <li><a href="#">My wishlist</a></li>
                    <li><a href="new_arrival.php">New Arrival</a></li>



              <?php
    
              if(isset($_SESSION['name'])){
                  $username = $_SESSION['name'];
                  
                  if($username !== 'Admin'){
                      echo"<li><a href='logout.php'>Log Out</a></li>
                   <li>Welcome, $username</li>";
                    
                  }else{
                      
                      
                      header('location:admin_index.php');
                     
                      
                  }

                        }else{
                
                        
                        echo"<li><a href='login.php'>Log in</a></li>
                        <li><a href='signup.php'>Sign Up</a></li>";
              }
    ?>

                </ul>

            </div>
        </div>

    </div>