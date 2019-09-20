<?php
include '../../config/connect.php';
$result=$con->query("SELECT * FROM booking");
 ?>

<section class="booking-list">
  <div class="container-fluid">
    <h1>Booking List</h1>
    <br><br>

    <table class="table table-hover">
      <thead>
        <tr>
        <th>#</th>
        <th>Depart From</th>
        <th>Arrive At</th>
        <th>Departure Date</th>
        <th>No. of Passenger/s</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $result->fetch_assoc()):
          ?>
        <tr>
          <form class="" action="page/process/rejectbooking.php?id=<?= $row['id']; ?>" method="post" role="form">

          <td><?= $row['id'] ?></td>


          <td><?= $row['departfrom'] ?></td>

          <td><?= $row['arriveat'] ?></td>

          <td><?= $row['departdate'] ?></td>

          <td><?= $row['passengerno'] ?></td>

          <td><?php
          $accept=$row['acceptance'];
          if ($accept==1) {
            echo "<p style='color:green;'>Accepted!</p>";
          }
          elseif ($accept==2) {
            echo "<p style='color:red;'>Rejected!</p>";
          }
          else {
            echo "<input type='submit' name='submit' value='Accept' class='btn btn-success'>  ||
            <input type='submit' name='submit' class='btn btn-danger' value='Reject' >";
          }
           ?>

          </td>

          </form>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>

<script type="text/javascript">

</script>
