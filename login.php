<?php
session_start();
include ("header.php");
include ("database/dbcon.php");

if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

$res = mysqli_query($con,$sql);
$result=mysqli_fetch_array($res);
if($result){
    $_SESSION['useremail']=$email;
    if($_SESSION['useremail']){
    header("location:index.php");
    }

}else{
    echo "failed";
}
}

?>
<br><br><br>
<div class="tdb-super-container b-tdb-black center border4" id="login">
    <br><br>
    <h1>login form</h1>
    <form action="" method="POST">

 <p>creat a new account<a href="signup.php" class="c-tdb-blue" id="signup" onclick="popup(signup-popup)"> Sign up!</a></p>   
    <br><br>
    <input type="email" class="input-tdb b-tdb-white" name="email" placeholder="enter your email" required>
    <br><br>
    <input type="password" class="input-tdb b-tdb-white" name="password" placeholder="enter your password" required>
    <br><br>
    <input type="submit" name="submit" class="btn1-tdb b-tdb-green" >
</form>

    <br><br>
    <br><br>    
</div>


<br><br><br>
<?php

include ("footer.php");

?>