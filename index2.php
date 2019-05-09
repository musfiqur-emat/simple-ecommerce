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
                    <li class="cart"><a href="#">My cart</a></li>
                    <li class="email"><a href="#">Send us an Email</a></li>
                </ul>
            </div>
        </div>

        <div class="bottomheader">
            <div class="wrapper clearfix">
                <h1 class="logo"> <a href="#"><img src="../ecomm/company%20logo.jpg"></a></h1>

                    <ul class="menu">

                        <li><a href="#">Categories</a></li>
                        <li><a href="#">My wishlist</a></li>
                        <li><a href="#">Top picks</a></li>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                
            </div>
        </div>

    </div>
    
    <div class="wrapper">
       <?php include "db.php";
        $sql = "SELECT * FROM product; ";
$result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)){
    
    
    
 echo"
<div class='photo_container'>
 <ul class='photo_list'>

<li><a href='show_product.php?id=".$row['id']."'><img src='images/".$row['img_name']."'></a><h4>Price:".$row['price']."</h4><h4>Description:".$row['description']."</h4><h5>category:".$row['category']."</h5>
</li> 
</ul>
 </div>";
    
 

}
        ?>
     
    </div>




   

    </body>
</html>