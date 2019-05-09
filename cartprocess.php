<?php

session_start();

$id = $_GET['id'];
$qty = $_POST['quantity'];

if(isset($_SESSION['productcart'])){ 
    
    $currentNo = $_SESSION['counter']+1;
    
   /* $_SESSION['productcart'][$currentNo] = $id;
    $_SESSION['qtycart'][$currentNo] = $qty;*/
    $flag = 0;
for ($x = 0; $x < $currentNo; $x++) {
    
    if($_SESSION['productcart'][$x] == $id){
         $_SESSION['qtycart'][$x] = $_SESSION['qtycart'][$x] + $qty;
        $flag = 1;
    }
   
    }
    
     if($flag == 0){
        $_SESSION['productcart'][$currentNo] = $id;
        $_SESSION['qtycart'][$currentNo] = $qty;
    
} 

    
    
    
    $_SESSION['counter'] = $currentNo;
    
    
}else{
    $productcart = array();
    $qtycart = array();
    
    $_SESSION['productcart'][0] = $id;
    $_SESSION['qtycart'][0] = $qty;
    $_SESSION['counter'] = 0;
}




header('location:viewcart.php');

?>