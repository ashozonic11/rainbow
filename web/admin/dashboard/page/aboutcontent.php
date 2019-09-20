<?php
include '../../config/connect.php';

$select1 = $con->query("SELECT * FROM aboutus WHERE id='1'");
$select2 = $con->query("SELECT * FROM aboutus WHERE id='2'");
$select3 = $con->query("SELECT * FROM aboutus WHERE id='3'");
while($row = $select1->fetch_assoc()){
  $content1 = $row['Description'];
}
while($row = $select2->fetch_assoc()){
  $content2 = $row['Description'];
}
while($row = $select3->fetch_assoc()){
  $content3 = $row['Description'];
}
 ?>

 <div class="container-fluid">
   <div class="row">

     <div class="col-md-10 col-md-offset-1" style="padding-bottom: 20px; border-bottom:1px solid grey;">
       <h3>Content #1</h3>
       <form class="form" action="page/process/updatecontent.php?id=1" method="post">
         <textarea name="txtarea1" rows="5" cols="80" class="form-control" placeholder="<?= $content1; ?>"></textarea><br>
         <input type="submit" name="submit" value="Save" class="btn btn-primary pull-right">
       </form>
     </div>

     <div class="col-md-10 col-md-offset-1" style="padding-bottom: 20px; border-bottom:1px solid grey;">
       <h3>Content #2</h3>
       <form class="form" action="page/process/updatecontent.php?id=2" method="post">
         <textarea name="txtarea2" rows="5" cols="80" class="form-control" placeholder="<?= $content2; ?>"></textarea><br>
         <input type="submit" name="submit" value="Save" class="btn btn-primary pull-right">
       </form>
     </div>

     <div class="col-md-10 col-md-offset-1" style="padding-bottom: 20px;">
       <h3>Content #3</h3>
       <form class="form" action="page/process/updatecontent.php?id=3" method="post">
         <textarea name="txtarea3" rows="5" cols="80" class="form-control" placeholder="<?= $content3; ?>"></textarea><br>
         <input type="submit" name="submit" value="Save" class="btn btn-primary pull-right">
       </form>
     </div>

   </div>
 </div>
