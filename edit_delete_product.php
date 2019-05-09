<?php include "db.php";
require('admin_header.php');
     
?>

   
<div class="wrapper">
    
        <?php
    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($connection,"SELECT * FROM product");

echo "<div class='tab'>
        <table border='0.5'>
        <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Inventory</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>";

while($row = mysqli_fetch_array($result))
{
    $id = $row['id'];
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td><img src='images/{$row['img_name']}' style='width:150px;'></td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['inventory']."</td>";
    echo "<td> <a href=edit_cat.php?cat_id=".$row['cat_id']. "> EDIT</a> </td>";
    echo "<td> <a href=delete_product.php?id=".$row['id']. ">DELETE</a></td>";
    echo "</tr>";
}
echo "</table> </div>";


?>
    </div>

<br><br>