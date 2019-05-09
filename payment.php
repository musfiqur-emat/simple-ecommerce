<?php include "db.php";
       require('header.php');


  

?>




<div class="register">
    
    <form action="change-credit-card.php" method="post">
        
        Credit Card Information<br><br>
         <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name">

        <label for="email">Card Number</label>
        <input type="text" id="email" name="email" placeholder="Card Number">
        
        <label for="address">Expiry Date</label>
        <input type="text" id="address" name="address" placeholder="Expiry Date eg. YYYY-MM">


        <input type="submit" name="submit" value="Submit">
    </form>
    
</div>