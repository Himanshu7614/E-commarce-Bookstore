<?php
include ("database/dbcon.php");
if(isset($_POST['submit'])){ 
    $productname = $_POST['productname'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discription = $_POST['discription'];
    $files = $_FILES['files'];
    // $files= $files;
    // print_r($files);
    $filename = $files['name'];
    $filepath = $files['tmp_name'];
    $fileerror = $files['error'];

    if($fileerror == 0){
         
        $destinaion = 'Productimages/'.$filename ;
        // echo $destinaion;
        move_uploaded_file($filepath, $destinaion);        
  

        $sql =  "INSERT INTO product(product, name,price, discription,productimage)
        VALUES ('$productname','$name','$price','$discription','$destinaion')";

        $insert = mysqli_query($con,$sql);

        if($insert){ 
            // echo "1";
            header("location:index.php");
        }else{
            echo "2";

        }

    }else{
        echo "error found";
    }
}
?>