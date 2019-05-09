<?php 
      include "db.php";
      require('admin_header.php');

        $q=$_GET["id"];
        echo "<div class = 'wrapper'>";

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($connection,"SELECT * FROM orderdetails where order_id = $q");

    echo "<div class='tab'>
            <table border='0.5'>
            <tr>
            <th>ID</th>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Product Image</th>
            <th>Price</th>
            </tr>";

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $order_id = $row['order_id'];
        $product_id = $row['product_id'];
        
        echo "<tr>";
        echo "<td>" .$row['id'] . "</td>";
        echo "<td>" .$row['order_id'] . "</td>";
        echo "<td>".$row['product_id']."</td>";
        
        $result2 = mysqli_query($connection,"SELECT img_name,price FROM product where id = $product_id");
        
        while($row2 = mysqli_fetch_array($result2))
    {
        echo "<td><img src='images/{$row2['img_name']}' style='width:150px;'></td>";
        echo "<td>".$row2['price']."</td>";


        echo "</tr>";
    }
    }
    echo "</table> </div>";


?>