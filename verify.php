<?php include "db.php";
      

if(isset($_POST["submit"])){
    
    
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




<html>

<head>
    <meta charset="UTF-8">
    <title>verification</title>
</head>

<body>
    <a href="verified.php">click here </a>


</body>

</html>