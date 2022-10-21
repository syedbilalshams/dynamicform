<?php 




      $uid = $_POST["user_id"];
 

      $user_fname = $_POST["f_name"];
      $user_lname = $_POST["l_name"];
      $username = $_POST["username"];
      $user_role = $_POST["role"];

      include "config.php";
      
      echo $query1 = "UPDATE `user` SET `first_name`='{$user_fname}',`last_name`='{$user_lname}',`username`='{$username}',`role`='{$user_role}' WHERE `user_id` = '{$uid}'";
 
      mysqli_query($conn,$query1);
      header("location:http://localhost/KSTORE/kstore/admin/users.php");
  ?>