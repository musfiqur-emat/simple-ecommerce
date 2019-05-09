<?php include "db.php";
      require('header.php');


    echo "<div class='wrapper register'>";
   if(isset($_POST['submit2'])){
       
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    $password = md5($password);
         
       
       
    
   /* if (empty ($username)) //if username field is empty echo below statement
    {
        echo "you must enter your unique username <br />";
    }
    if (empty ($password)) //if password 1 field is empty echo below statement
    {
        echo "you must enter your password <br />";
    }


else
{  */
    
 
    $query = "SELECT * FROM users WHERE name = '$username' AND password = '$password' AND status = 'A'; " ;
    $result = mysqli_query($connection,$query);
    $row = mysqli_num_rows($result);
    if ($row>=1) 
    {
        
        $_SESSION['name'] = $username;
        header('location:index.php');
        
    }
    else
    {
        echo "Unscccessful login";
    }
}
   /*}*/
    ?>






    <form action="login.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name" require>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" require>

        <input type="submit" name="submit2" value="Submit">
    </form>
</div>