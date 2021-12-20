<?php
session_start();
unset($_SESSION['useremail']);
header('location:index.php');

?>