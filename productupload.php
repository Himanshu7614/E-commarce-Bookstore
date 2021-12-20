<?php
include ("database/dbcon.php");
include ("header.php");
// error_reporting();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file/book</title>
</head>
<body>
    
<br><br><br>
<div class="tdb-container b-tdb-black center">
<br><br><br>

    <form action="logic.php" method="POST" enctype="multipart/form-data">
    <input type="text" class="input-tdb b-tdb-grey1" name="productname" placeholder="Product name" required>
    <br><br>
    <input type="text" class="input-tdb b-tdb-grey1" name="name" placeholder="name" required>
    <br><br>

    <input type="text" class="input-tdb b-tdb-grey1" name="price" placeholder="discription" required>
    <br><br>
    <input type="text" class="input-tdb b-tdb-grey1" name="discription" placeholder="price" required>
    <br><br>
    <input type="file" class="input-tdb b-tdb-grey1" name="files" placeholder="filename" value="product image" required>
    <br><br>
    <input type="submit" name="submit" class=" btn1-tdb" value="Submit" >
    </form>
<br><br><br>

</div>
</body>
</html>


