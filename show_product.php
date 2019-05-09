<?php require('header.php');

$id = $_GET['id'];

?>


<div class="productx">

    <div class="wrapper clearfix">

        <div class="row">
            <div class="column1">
                <?php 
        $sql = "SELECT * FROM product where id = '$id'; ";
        $result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)){
    
    $id = $row['id'];
    $inventory = $row['inventory'];
    
 echo"
<img src='images/".$row['img_name']."'><br><br><h4>Name:".$row['name']."</h4><h4>Price:".$row['price']."</h4><p>Description:".$row['description']."</p><p>category:".$row['category']."</p> <p>Rating:".$row['rating']."</p>";
}
    ?>

 

            </div>
            <div class="column2">

                <a href=''><button>ADD TO WISHLIST</button></a>
                <br>
                <br>
                <form action='cartprocess.php?id=<?php echo"$id" ?>' method='post'>
                   
                    
                    <?php 
    
    
    if($inventory>0){
         echo "<select name='quantity'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select>";
                    echo"<button name='submit' type='submit' value='ADD TO CART'>ADD TO CART</button>";
    }else{
        echo "<h3>Sold out</h3>";
    }
            ?>
                
                        </form>

            </div>


        </div>



    </div>
</div>