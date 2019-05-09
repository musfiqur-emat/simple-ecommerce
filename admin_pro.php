<?php include "db.php";
    

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $tmp      = explode('.',$_FILES['image']['name']);
      $file_ext = strtolower(end($tmp));
    
    
    
      $name = $_POST['name'];
      $category = $_POST['category'];
      $inventory = $_POST['inventory'];
      $price = $_POST['price'];
      $description = $_POST['description'];

      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "File uploaded Successfully";
          
    $q = "select cat_id from category where cat_name = '$category' ";
    $r = mysqli_query($connection,$q);
    $ro = mysqli_fetch_array($r);
    $cat_id = $ro['cat_id'];
          
          
         
            
    $query = "INSERT INTO product(name,category,cat_id,inventory,price,img_name,description) VALUES('$name','$category','$cat_id','$inventory','$price','$file_name','$description')";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('query failed'.mysqli_error());
    }else{
    echo "Successful";
    }
          
          
      }else{
         print_r($errors);
      }
   }
?>


<?php 
  require('admin_header.php');
        ?>


<div class="register">
    <form action="admin_product.php" method="post" enctype="multipart/form-data">
        <div class="add_cat">
            <label for="Product">Add Product</label>
            <br> <br> <br>
            <label for="name">Prouct Name</label>
            <input type="text" name="name"> <br><br>

            <label for="category">Category</label>
            <?php
                
                $sql = "SELECT cat_name FROM category";
                $result = mysqli_query($connection,$sql);

echo "<select name='category'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['cat_name'] ."'>" . $row['cat_name'] ."</option>";
}
echo "</select>";
            ?>
            <br><br>

            <label for="price">Unit Price</label>
            <input type="number" name="price">

            <label for="inventory">Inventory</label>
            <input type="number" name="inventory">
            <br><br>

            <label for="image">Upload Image</label>
            <input type="file" name="image">
            <br><br>


            <label for="description">Description</label>
            <input type="text" name="description">


            <input type="submit" />
        </div>
    </form>
    <a href='edit_delete.php'><button>EDIT/DELETE Product</button></a>

</div>