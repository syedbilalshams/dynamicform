<?php 
$id = $_GET["id"];
include "config.php";
$query = "DELETE FROM `user` WHERE `user_id`= '{$id}'";
mysqli_query($conn,$query);
header("location:http://localhost/KSTORE/kstore/admin/users.php")

?>