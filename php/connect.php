<?php


$connect = mysqli_connect("localhost" , "root" , "" , "back_office");
if ($connect-> connect_error) {
    die("connection failed:" . $connect->connect_error);
}

$sql = "SELECT IDCom, Username , Quantity , Price FROM commandes";
$result = $connect-> query($sql);
?>