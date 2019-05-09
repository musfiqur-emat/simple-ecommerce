<?php include "db.php";

    $q=$_GET["id"];

    $query = "delete from product where id='$q' ";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
        echo "deleted!";
   header('location:edit_delete_product.php');
    }
?>