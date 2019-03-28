<?php
include('database_connection.php');
$email="mouradtlili66@gmail.com";
$msg = "Welcome To E-DEBBOU , Please verify your adress  Yout activation Code is : 'will be generated' ";
mail($email, 'E-Mail Verification ' ,$msg,'From: edebbou@gmail.com');
?>