<?php include "db.php";
     
?>

   
<div class="wrapper">
    
        <?php
    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($connection,"SELECT * FROM category");

echo "<div class='tab'>
        <table border='0.5'>
        <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>";

while($row = mysqli_fetch_array($result))
{
    $catid = $row['cat_id'];
    echo "<tr>";
    echo "<td>" . $row['cat_id'] . "</td>";
    echo "<td> <a href=show_admin_category.php?id=$catid>".$row['cat_name']."</a></td>";
    echo "<td> <a href=edit_cat.php?cat_id=".$row['cat_id']. "> EDIT</a> </td>";
    echo "<td> <a href=delete_cat.php?cat_id=" .$row['cat_id']. ">DELETE</a></td>";
    echo "</tr>";
}
echo "</table> </div>";


?>
    </div>

<br><br>