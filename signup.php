<?php require('header.php'); ?>
<?php include "db.php";
      

if(isset($_POST['submit'])){
    
    
    $username = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $password = md5($password);
    
    $query = "INSERT INTO users(name,password,email,address,status) VALUES('$username','$password','$email','$address','P')";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
        
        echo "Sign Up Successful \n";
        $secret = "35onoi2=-7#%g03kl";
        $email = urlencode($_POST['email']);
        $hash = MD5($_POST['email'].$secret);
        $link = "http://localhost/verify.php?email=$email&hash=$hash";
        session_start();
        $_SESSION['name'] = $username;
    }

}

?>

<div class="wrapper register">

    <form action="verify.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <label for="password">Password</label>
        <input type="password" id="psw" name="password" placeholder="Password">

        <label for="rpassword">Repeat Password</label>
        <input type="password" id="rpsw" name="rpassword" placeholder="Repeat Password">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">
        
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="address">


        <input type="submit" name="submit" value="Submit">
    </form>
</div>