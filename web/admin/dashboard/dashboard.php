<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location: ../index.php?message=invalid');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Username: <?php echo $_SESSION['admin']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="dashboard.php">Booking List</a></li>
      <li><a href="dashboard.php?page=manageflights">Manage Flights</a></li>
      
    </ul>
    <ul class="nav navbar-nav pull-right">
      <li><a href="page/process/logout.php?logout">Log Out</a></li>
    </ul>
  </div>
</nav>

<?php
if (isset($_GET['page'])) {
  $url_name=$_GET['page'];
  include 'page/'.$url_name.'.php';
}
elseif(isset($GET['message'])=='logout'){
  include 'index.php';
}
else {
  include 'page/bookinglist.php';
}
 ?>

  </body>
</html>

<script>

</script>
