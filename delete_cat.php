<?php include "db.php";

    $q=$_GET["cat_id"];

    $query = "delete from category where cat_id='$q' ";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
        echo "deleted!";
   header('location:admin_category.php');
    }
?>