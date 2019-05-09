<?php include "db.php";
    require('admin_header.php');

    $q=$_GET["id"];

    $query = "delete from orders where id='$q' ";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
        echo "deleted!";
   header('location:manage_orders.php');
    }
?>