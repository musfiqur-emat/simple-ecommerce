<?php 
    include "db.php";
    require('header.php');
/*session_start();*/

if(isset($_GET['id'])){
    $id = $_GET['id'];
    unset($_SESSION['productcart'][$id]);
    unset($_SESSION['qtycart'][$id]);
}



echo "<div class='wrapper'>";
echo "<div class ='cart'>";


if(isset($_SESSION['productcart']) && !empty($_SESSION['productcart'])){
    
    echo "<table>";
    echo "<tr>";
    
    echo "<th>Serial</th>";
    echo "<th>Title</th>";
    echo "<th>Image</th>";
    echo "<th>Quantity</th>";
    echo "<th>Unit Price</th>";
    echo "<th>Subtotal</th>";
    
    echo "</tr>";
    
    
    
    
    
    
            $i = 0;
        
            $grandtotal = array();
        foreach($_SESSION['productcart'] as $key => $value){


            $i++;
            $productq = mysqli_query($connection,"select * from product where id = '$value'; ") or die('query failed'.mysqli_error($connection));
            $productdetails = mysqli_fetch_array($productq);

            $qty = $_SESSION['qtycart'][$key];
            echo "<div class='wrapper' >";
            
            $subtotal = $qty * $productdetails['price'];
            
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>{$productdetails['name']}</td>";
            echo "<td><img src='images/{$productdetails['img_name']}' style='width:150px;'></td>";
            echo "<td>$qty</td>";
            echo "<td>{$productdetails['price']}</td>";
           
            echo "<td>$subtotal</td>";
            echo "<td><a href='?id=$key'>Remove</a></td>";

            echo "</tr>";
            
            $grandtotal[] = $subtotal;

    }
            $finalsum = array_sum($grandtotal);
    
      echo "<tr>";
      echo "<td></td><td></td><td></td><td></td><td>Total = </td><td>$finalsum</td>";
      echo "</tr>";
    
    
    
    
    echo "</table>";
    
    echo "<div class='register'><a href='checkout.php'><button>Checkout</button></a>";
    echo "<a href='index.php'><button>Buy More Products</button></a>";
    $_SESSION['bill'] = $finalsum;
    
    echo "</div></div>";
    
}else{
    echo "<div class='register'>CART IS EMPTY <br>";
    echo "<a href='index.php'><button>Buy Products </button></a>";
    
}

echo "</div>";
echo "</div>";


?>