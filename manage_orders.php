<?php include "db.php";
      require('admin_header.php');
echo "<div class = 'wrapper'>";

    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($connection,"SELECT * FROM orders");

echo "<div class='tab'>
        <table border='0.5'>
        <tr>
        <th>Order ID</th>
        <th>Orderer Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Total Bill</th>
        <th>Order Status</th>
        <th>Transaction ID</th>
        <th>Date</th>
        <th>Order Details</th>
        <th>Delete</th>
        </tr>";

while($row = mysqli_fetch_array($result))
{
    $id = $row['id'];
    echo "<tr>";
    echo "<td>" .$row['id'] . "</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['bill']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>".$row['transaction_id']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "<td> <a href=order_details.php?id=".$row['id']. "> Details</a> </td>";
    echo "<td> <a href=delete_orders.php?id=".$row['id']. ">DELETE</a></td>";
  
    echo "</tr>";
}
echo "</table> </div>";
    

?>