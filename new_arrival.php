<?php include "db.php";

require('header.php');

?>
  
  <div class="wrapper">
  <?php

  if (isset($_GET["page"] )) 
        {
        $page  = $_GET["page"]; 
        } 
    else 
       {
        $page=1; 
       };

$limit = 4; 
$record_index= ($page-1) * $limit;  

 $sql = "SELECT * FROM product order by id desc LIMIT $record_index, $limit";
  $retval = mysqli_query($connection, $sql);
 if (mysqli_num_rows($retval) > 0) {

         while($row = mysqli_fetch_assoc($retval)) {
             echo"

<div class='photo_container'>
 <ul class='photo_list'>

<li><a href='show_product.php?id=".$row['id']."'><img src='images/".$row['img_name']."'></a><h4>Price:".$row['price']."</h4><h4>Description:".$row['description']."</h4><h5>category:".$row['category']."</h5>
</li> 
</ul>
</div>" ;
}
     

     
     
$sql = "SELECT COUNT(*) FROM product"; 
$retval1 = mysqli_query($connection, $sql);  
$row = mysqli_fetch_row($retval1);  
$total_records = $row[0];
    //  echo $total_records;
$total_pages = ceil($total_records / $limit);  
//$pagLink = "<div class='pagination'>";  
echo "<ul class='pagination'>";
     if($page != 1){
echo "<li><a href='new_arrival.php?page=".($page-1)."' class='button'>Previous</a></li>"; 
     }

for ($i=1; $i<=$total_pages; $i++) {  
    echo "<li><a href='new_arrival.php?page=".$i."'>".$i."</a></li>";
};  

     
if($page != $total_pages){
echo "<li><a href='new_arrival.php?page=".($page+1)."' class='button'>NEXT</a></li>";
     }
echo "</ul>"; 
     ;
};  


?>
</div>