<?php 
$db = mysqli_connect('localhost' , 'root' , '' , 'eddebou');

$results = mysqli_query($db , "SELECT * FROM produit ");

?>