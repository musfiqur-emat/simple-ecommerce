<?php include "db.php";
      require('header.php');
?>

<div class="cate">
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
        
        <th>Category Name</th>
       
       
        </tr>";

while($row = mysqli_fetch_array($result))
{
    $catid = $row['cat_id'];
    echo "<tr>";
    echo "<td> <a href=showcategory.php?id=$catid>".$row['cat_name']."</a></td>";
    echo "</tr>";
}
echo "</table> </div>";


?>
    </div>
</div>

<br><br>