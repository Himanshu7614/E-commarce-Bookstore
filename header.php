<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>J.Brown-Home</title>
</head>

<body>
    <div class="header1">
        <header class="tdb-super-container padding-side-tdb40 ">

            <h1> <a href="index.php"> <b>J.Brown</b> </a></h1>
            <nav>
                <ul>
                    <li> <a href="index.php"> <b>HOME</b> </a></li>
                    <li> <a href="product.php"> <b>Book</b> </a></li>
                    <li> <a href="#bio"> <b>Bio</b></a></li>
                    <li> <a href="contact.php"> <b>Contact</b></a></li>
                    <li> <a href="cart.php"><button class="btn1-tdb"><b>ADD TO CART </b> <i
                                    class="fas fa-cart-plus"></i></button></a>
                    </li>
                    <li>
                        <a href="login.php"><button class="btn1-tdb padding-tb5" onclick="popup(login-popup)"><b>log in
                                </b> <i class="fas fa-user"></i></button></a>

                    </li>
                    <?php
                         if(isset($_SESSION['useremail'])){
                            echo '  <li><a href="logout.php"> <button><i class="fas fa-sign-out-alt"></i></button> </a></li>';                            
                            }?>
                   
                </ul>
            </nav>

        </header>
    </div>
    <div class="center b-tdb-black">
    <?php
   if(isset($_SESSION['useremail'])){
echo ' <b> id : '.$_SESSION['useremail'].'</b>';

}
?>
</div>

  