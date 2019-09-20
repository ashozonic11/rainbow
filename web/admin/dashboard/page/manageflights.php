<?php
include '../../config/connect.php';
$result=$con->query("SELECT * FROM flights");



 ?>

<section class="manage">
  <div class="container-fluid">
    <h1>Manage Flights</h1>
    <br><br>

    <table class="table table-hover">
      <thead>
        <tr>
        <th>#</th>
        <th>Flight No.</th>
        <th>Depart From</th>
        <th>Arrive At</th>
        <th>Departure Date</th>

        <th>Return Date</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php

        while ($row = $result->fetch_assoc()):
          ?>
        <tr>
          <form class="form" action="page/process/update.php?id=<?=$row['id']; ?>" method="post" role="form">

            <td><?php echo $row['id']; ?>
              </td>

            <td><?php echo $row['flightno']; ?>
              <div class="<?=$row['flightno'] ?>" style="display:none;">
                <input type="text" name="flightnum" value="" placeholder="Flight No." class="form-control">
              </div></td>

              <td><?php echo $row['departfrom']; ?>
                <div class="<?=$row['flightno'] ?>" style="display:none;">
                  <input type="text" name="depart" value="" placeholder="Depart From" class="form-control">
                </div></td>

                <td><?php echo $row['arriveat']; ?>
                  <div class="<?=$row['flightno'] ?>" style="display:none;">
                    <input type="text" name="arrive" value="" placeholder="Arrive At" class="form-control">
                  </div></td>

                  <td><?php echo $row['departuredate']; ?>
                    <div class="<?=$row['flightno'] ?>" style="display:none;">
                      <input type="date" name="dptdate" value="" placeholder="Departure Date" class="form-control">
                    </div></td>

                    <td><?php echo $row['arrivaldate']; ?>
                      <div class="<?=$row['flightno'] ?>" style="display:none;">
                        <input type="date" name="arrdate" value="" placeholder="Arrival Date" class="form-control">
                      </div></td>
                      <td><input type="submit" name="submit" value="Done" class="<?= $row['flightno'] ?> btn btn-success" style="display:none;">
                    </form>
                     <button type="button" name="btn-change" value="Change" id="<?= $row['flightno'] ?>" class="btn btn-success"  onclick="showRow(<?= $row['flightno'] ?>)">Change</button>
                      </td>

        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>

<script>
function showRow(flightno){
    $("."+flightno).slideDown("slow");
    $("input #"+flightno).show();
    $("#"+flightno).hide();
}

</script>
