<?php
include ('../config/connect.php');
  if(isset($_POST)){
     $desc = $_POST['description'];
     $conn->query("insert into aboutus (Description) values
     ('$desc')");
  }

 ?>
