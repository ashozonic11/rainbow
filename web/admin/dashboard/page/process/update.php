<?php
include '../../../../config/connect.php';
$id=$_GET['id'];
$getstatement="SELECT * FROM flights WHERE id='$id'";
$getquery=mysqli_query($con,$getstatement);
$row=$getquery->fetch_assoc();

if (isset($_POST['submit'])) {
  $flightno=$_POST['flightnum'];
  $departfrom=$_POST['depart'];
  $arriveat=$_POST['arrive'];
  $ddate=$_POST['dptdate'];
  $adate=$_POST['arrdate'];
  $statement="UPDATE flights SET flightno='$flightno', departfrom='$departfrom', arriveat='$arriveat', departuredate='$ddate', arrivaldate='$adate' WHERE id=$id";
  $query2=mysqli_query($con,$statement);
  header('location:../../dashboard.php?page=manageflights');
}
 ?>
