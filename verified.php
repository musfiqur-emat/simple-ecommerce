<?php include "db.php";
       
     

    session_start();
    $username = $_SESSION['name'];


    $query = "update users set status = 'A' where name='$username' ";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
    echo "You email id is verfied \n";
    echo "sign in to continue";
        session_destroy();
    }
   
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>verfication on process</title>
    <a href="login.php">Login</a>
</head>
<body>
    
</body>
</html>