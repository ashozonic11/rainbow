<?php
include '../../../../config/connect.php';
$id=$_GET['id'];
$choice=$_POST['submit'];
  if ($choice=='Accept') {
    $statement="UPDATE booking SET acceptance='1' WHERE id='$id'";
    $query=mysqli_query($con,$statement);
  }
  elseif ($choice=='Reject') {
    $statement="UPDATE booking SET acceptance='2' WHERE id='$id'";
    $query=mysqli_query($con,$statement);
  }


  header('location:../../dashboard.php?page=bookinglist');

 ?>
