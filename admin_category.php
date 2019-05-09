 <?php include "db.php";  
  
if(isset($_POST["submit"])){
    
    
    $cat_name =$_POST['cat_name'];
    
    $query = "INSERT INTO category(cat_name) VALUES('$cat_name')";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){ 
        die('query failed'.mysqli_error());
    }else{

    }
    //echo $username;
    //echo $password;
}


  require('admin_header.php');
  require('edit_delete.php');
        ?>
        
<div class="register">
<form action="admin_category.php" method="post">
    <div class="add_cat">
        <label for="category">Add category</label>
        <input type="text" name="cat_name">
        <input type="submit" name="submit" value="Submit">
    </div>
    </form>

</div>
    

    