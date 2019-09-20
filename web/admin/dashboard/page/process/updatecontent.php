<?php
include '../../../../config/connect.php';
$id=$_GET['id'];
$getstatement="SELECT * FROM aboutus WHERE id='$id'";
$getquery=mysqli_query($con,$getstatement);
$row=$getquery->fetch_assoc();

if (isset($_POST['submit'])) {
  if ($_GET['id']==1) {
    $content=$_POST['txtarea1'];
  }
  elseif ($_GET['id']==2) {
    $content=$_POST['txtarea2'];
  }
  elseif ($_GET['id']==3) {
    $content=$_POST['txtarea3'];
  }
  $statement="UPDATE aboutus SET Description='$content' WHERE id=$id";
  $query2=mysqli_query($con,$statement);
  header('location:../../dashboard.php?page=aboutcontent');
}
 ?>
