<?php require('header.php'); ?>
<?php include "db.php";
      
$finalsum = $_SESSION['bill'];




if(isset($_POST['submit'])){
    
    
    $username = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $date = date('Y-m-d H:i:s');
    
    $query = "INSERT INTO orders(name,address,email,bill,status,date) VALUES('$username','$address','$email','$finalsum','P', '$date')";
    
    $result = mysqli_query($connection,$query);
    if(!$result){
           die('query failed'.mysqli_error());
    }
    
    
    $q2="select id from orders where date = '$date';";
    $r2 = mysqli_query($connection,$q2);
    
    while($row2 = mysqli_fetch_assoc($r2)){
    
    $order_id = $row2['id'];
    
    $_SESSION['order_id'] = $order_id;
        
    }
    
   
  foreach($_SESSION['productcart'] as $key => $value){
      $q3 = "INSERT INTO orderdetails(order_id,product_id,date) VALUES('$order_id','$value','$date'); " ;
      $r3 = mysqli_query($connection,$q3);
      if(!$r3){
        die('query failed'.mysqli_error());
    }else{
        header('location:payment.php');
    }

      
  }
    
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
       // header('location:payment.php');
    }

}

?>

<div class="wrapper register">

    <form action="checkout.php" method="post">
       
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">
        
        <label for="address">Delivery Address</label>
        <input type="text" id="address" name="address" placeholder="address">


        <input type="submit" name="submit" value="Submit">
    </form>
</div>