<?php include "db.php";
        require "admin_header.php";

    $q=$_GET["cat_id"];


?>



<html>

<head>
    <meta charset="UTF-8">
    <title>Update category</title>
</head>

<body>
    <div class="wrapper">
        <form action="edited.php" method="post">
            <input type="text" name="uname"  placeholder="Type updated name">
            <input type="hidden" id="id" name="id" value="<?php echo $q?>">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>