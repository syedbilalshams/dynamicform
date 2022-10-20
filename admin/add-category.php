<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
                  <?php
                  if(isset($_POST["save"]))
                  {
                      $cat = $_POST["cat"];
                      include "config.php";
                      $query1 = "SELECT * FROM `category` WHERE `category_name` = '{$cat}'";
                      $result = mysqli_query($conn,$query1);
                      if(mysqli_num_rows($result) > 0){
                          echo "already exist";
                      }
                      else{
                        $query = "INSERT INTO `category` (`category_name`) VALUES ('{$cat}')";
                        mysqli_query($conn,$query);
                      }
                  }
                  
                  ?>
              </div>
          </div>
      </div>
  </div>
  
<?php include "footer.php"; ?>
