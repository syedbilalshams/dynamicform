<?php 

include "config.php";

session_start();
if(isset($_SESSION["name"])){
    header("location:http://localhost:82/KSTORE/admin/products.php");
}
?>


<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <img class="logo" src="images/logo.jpg" style="height: 120px; ">
                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                        <form  action="" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />


                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
        <?php 
        if(isset($_POST["login"])){
            include "config.php";
            $name = $_POST["username"];
            $password = $_POST["password"];
            $query = "SELECT`first_name`, `username`,`role` FROM `user` WHERE `username` = '{$name}' AND `password` = '{$password}'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["name"] =$row["username"];
                    $_SESSION["fname"] =$row["first_name"];
                    $_SESSION["role"] =$row["role"];
                    header("location:http://localhost:82/KSTORE/admin/products.php");
                }
            }
            else{
                echo "Incorrect Information";
            }
        }
        
        ?>
    </body>
</html>
