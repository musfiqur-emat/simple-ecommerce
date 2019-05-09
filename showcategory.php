<?php 
      include "db.php";
      require('header.php');
      $catid = $_GET['id'];
      echo "<div class='wrapper'>";
      $query2 = "SELECT * FROM product where cat_id = '$catid' ";
      $result2 = mysqli_query($connection,$query2);


while($row2 = mysqli_fetch_assoc($result2)) {

    echo" <div class='photo_container'>
         <ul class='photo_list'>

        <li><a href='show_product.php?id=".$row2['id']."'><img src='images/".$row2['img_name']."'></a><h4>Name:".$row2['name']."</h4><h4>Price:".$row2['price']."</h4><h4>Description:".$row2['description']."</h4><h5>category:".$row2['category']."</h5>
        </li> 
        </ul>
        </div>" ;
    }


?>
