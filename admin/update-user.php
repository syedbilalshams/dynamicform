<?php include "header.php"; ?>
<?php 
$id = $_GET["id"];

include "config.php";
$query  = "SELECT * FROM `user` WHERE `user_id`='{$id}'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
 
    
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <?php    while($row = mysqli_fetch_assoc($result)){?>
                  <form  action="edit.php" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $row["user_id"]; ?>" placeholder="" >
                      </div>
                      
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control"  placeholder="" required value="<?php echo $row["first_name"]; ?>">
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control"  placeholder="" required value="<?php echo $row["last_name"]; ?>">
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control"  placeholder="" required value="<?php echo $row["username"]; ?>">
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                              <option value="0">normal User</option>
                              <option value="1">Admin</option>
                          </select>
                          <?php } ?>
                      </div>

                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                    </form>
                    <?php } ?>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>

<?php include "footer.php"; ?>
