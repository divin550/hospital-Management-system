<?php
require_once "../components/connection.php";
$query = "SELECT appointment_table_new.*, doctor_table.name AS doctor_name
          FROM appointment_table_new
          INNER JOIN doctor_table
          ON appointment_table_new.doctor_id = doctor_table.id";

$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appointments | Health Center Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page" data-title="Appointments">
  <main class="admin-content">
    <section class="admin-card">
      <div class="admin-card-heading">
        <h2>All Appointments</h2>
        <a class="btn btn-admin-primary btn-sm" href="../index.php#appointment">
          <i class="fa fa-plus"></i> New Appointment
        </a>
      </div>
      <div class="admin-filter-row row">
        <div class="col-sm-4">
          <input class="form-control table-filter-search" placeholder="Search appointments">
        </div>
        <div class="col-sm-3">
          <select class="form-control table-filter-select">
            <option value="">All departments</option>
            <option>General Health</option>
            <option>Cardiology</option>
            <option>Dental</option>
            <option>Pregnancy</option>
          </select>
        </div>
        <div class="col-sm-2">
          <input class="form-control table-filter-date" type="date" aria-label="Filter by date">
        </div>
        <div class="col-sm-3">
          <select class="form-control table-filter-status">
            <option value="">All statuses</option>
            <option>Approved</option>
            <option>Pending</option>
            <option>Cancelled</option>
          </select>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover admin-table searchable-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Patient</th>
              <th>Doctor</th>
              <th>Department</th>
              <th>Date</th>
              <th>Time</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            
            ?>
            <tr data-date="2026-10-27">
              <td><?php echo $row["id"]?></td>
              <td><?php echo $row["appointment_name"]?></td>
              <td><?php echo $row["doctor_name"]?></td>
              <td><?php echo $row["department"]?></td>
              <td><?php echo $row["appointment_date"]?></td>
              <td><?php echo $row["appointment_time"]?></td>
              <td><span class="label label-approved"><?php echo $row["status"]?></span></td>
              <td class="action-cell">
                <button class="btn btn-xs btn-default" data-view="Appointment APT-1042"><i class="fa fa-eye"></i></button>
                <button class="btn btn-xs btn-admin-primary" data-approve><i class="fa fa-check"></i></button>
                <button class="btn btn-xs btn-danger" data-cancel><i class="fa fa-times"></i></button>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      <ul class="pagination admin-pagination">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" aria-label="Next">»</a></li>
      </ul>
    </section>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/admin.js"></script>
</body>
</html>
