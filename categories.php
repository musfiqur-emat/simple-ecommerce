<?php 
      include "db.php";
      require('header.php');

?>


<div class="wrapper">
    <?php


if(isset($_POST['submit'])){
        $cat_name = $_POST['category'];
        $query2 = "SELECT * FROM product where category = '$cat_name' ";

        $result2 = mysqli_query($connection,$query2);


while($row2 = mysqli_fetch_assoc($result2)) {

    echo"       
        <div class='photo_container'>
         <ul class='photo_list'>

        <li><a href='show_product.php?id=".$row2['id']."'><img src='images/".$row2['img_name']."'></a><h4>Name:".$row2['name']."</h4><h4>Price:".$row2['price']."</h4><h4>Description:".$row2['description']."</h4><h5>category:".$row2['category']."</h5>
        </li> 
        </ul>
        </div>" ;
    }

}


?>


    <div class="catdropdown">
        <form action="categories.php" method="post">
            <label for="category">Category </label>
            <?php
                
                $sql = "SELECT cat_name FROM category";
                $result = mysqli_query($connection,$sql);

                echo "<select name='category'>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['cat_name'] ."'>" . $row['cat_name'] ."</option>";
                }
                echo "</select>";
                            ?>
            <input type="submit" class="submit" name="submit" value="submit">

        </form>
    </div>
</div>