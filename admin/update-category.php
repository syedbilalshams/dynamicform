<?php include "header.php"; ?>
<?php 
$id = $_GET["id"];
include "config.php";
$query = "SELECT * FROM `category` WHERE category_id = '{$id}'";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
  
  if(isset($_POST["sumbit"])){
    $cat_id = $_POST["cat_id"];
      $cat_name = $_POST["cat_name"];
       $query1 ="UPDATE `category` SET`category_name`='{$cat_name}' WHERE `category_id` = '{$cat_id}'";
      mysqli_query($conn,$query1);
      header("location:http://localhost/KSTORE/kstore/admin/category.php");
   }
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="" method ="POST">
                      <?php  
                      while($row = mysqli_fetch_assoc($result)){
                      
                      ?>
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row["category_id"] ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row["category_name"] ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                      <?php }?>
                  </form>
                  <?php }?>
                </div>
              </div>
            </div>
                      
          </div>
          <?php
          ?>
<?php include "footer.php"; ?>
