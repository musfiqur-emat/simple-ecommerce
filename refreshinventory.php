<?php include "db.php";
    


function updateInventory(){
    global $connection;
 $i = 0;

foreach($_SESSION['productcart'] as $key => $value){
    $product_id = $_SESSION['productcart'][$i];
    $quantity = $_SESSION['qtycart'][$i];
    
    $sql = "update product set inventory = inventory-'$quantity' where id = '$product_id'";
    $result=mysqli_query($connection,$sql);
    $i++;
    
    }
}