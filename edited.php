<?php include "db.php";
if(isset($_POST['submit'])){
    $uid = $_POST['id'];
    $uname = $_POST['uname'];
}


   $query = "update category set cat_name = '$uname' where cat_id='$uid' ";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
       
   header('location:edit_delete.php');
    }

 

?>