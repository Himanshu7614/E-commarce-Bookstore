<?php

include ("header.php");
include ("database/dbcon.php");

$msg = 'password does not match';
$GLOBALS['msg'] = $msg;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        $sql =  "INSERT INTO registration (name, email,phone, password)
        VALUES ('$name','$email','$phone','$password'";

        $insert = mysqli_query($con,$sql);

        if($insert){ 
            // echo "1";
            header("location:index.php");
        }else{
            echo "2";

        }
    }else{
        
?>

<div>
    
<br><br><br>
<div class="tdb-super-container b-tdb-black center border4">
    <br><br>
    <h1>signup form</h1>
    <form action="" method="POST">
    <p>if you have already an account<a href="login.php" class="c-tdb-blue" id="signup" onclick="popup(signup-popup)"> login up!</a></p>    
    <br><br>    
    <input type="name" class="input-tdb b-tdb-white" name="name" placeholder="enter your name" required>
    <br><br>
    <input type="email" class="input-tdb b-tdb-white" name="email" placeholder="enter your email" required>
    <br><br>    
    <input type="text" class="input-tdb b-tdb-white" name="phone" placeholder="enter your mobile number" required>
    <br><br>
    <input type="password" class="input-tdb b-tdb-white" name="password" placeholder="enter your password" required>
    <br><br>
    <input type="password" class="input-tdb b-tdb-white" name="cpassword" placeholder="conforme password" required>
    <br><br>

    <?php echo $GLOBALS['msg']; ?>
    <br><br>
    <input type="submit" name="submit" class="btn1-tdb b-tdb-green" >
    </form>
    <br><br>
    <br><br>    
</div>


<br><br><br>
</div>

<?php
}
        

}
include ("footer.php");

?>