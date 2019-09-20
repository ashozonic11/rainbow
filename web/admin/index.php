<?php
session_start();
include '../config/connect.php';
if (isset($_POST['submit'])) {
  $username=$_POST['admin_email'];
  $password=$_POST['admin_password'];
  $query=mysqli_query($con,"SELECT * FROM admin WHERE Username='".$username."' AND Password='".$password."'");
  $row=mysqli_fetch_assoc($query);
  if (!$row) {
    header("location: index.php?message=invalid");
  }
  else {
    $_SESSION['admin']=$username;
    header('location:dashboard/dashboard.php');
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="col-md-5">
      <h1>Admin Panel</h1>
      <h3>Log In</h3><br><br>

        <form class="form" action="" method="post" role="form">
          <input type="text" name="admin_email" value="" placeholder="Email Address" class="form-control"><br>
          <input type="password" name="admin_password" value="" placeholder="Password" class="form-control"><br>

          <input type="submit" name="submit" value="Log In" class="btn btn-primary pull-right">
        </form>
        <?php
        if (isset($_GET['message'])=='invalid') {
          echo "<span style='color: Red'>You donot have the permssion to enter. Please log in first.</span>";
        }
         ?>
      </div>
    </div>
  </body>
</html>
