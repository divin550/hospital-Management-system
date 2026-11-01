<?php
require_once "../components/connection.php";
$query = "SELECT * FROM patient_table";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patients | Health Center Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page" data-title="Patients">
  <main class="admin-content">
    <section class="admin-card">
      <div class="admin-card-heading">
        <h2>Patient Directory</h2>
        <button class="btn btn-admin-primary" data-toggle="modal" data-target="#patient-modal">
          <i class="fa fa-plus"></i> Add Patient
        </button>
      </div>
      <div class="admin-filter-row">
        <input class="form-control table-filter-search" placeholder="Search patients">
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover admin-table searchable-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Phone</th>
              <th>Last Visit</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($patient = mysqli_fetch_assoc($result)) {
              
            ?>
            <tr>
              <td><?php echo $patient["id"];?></td>
              <td><img class="table-avatar" src="../<?php echo $patient["photo"];?>" alt=""></td>
              <td><?php echo $patient["name"];?></td>
              <td><?php echo $patient["age"];?></td>
              <td><?php echo $patient["gender"];?></td>
              <td><?php echo $patient["phone"];?></td>
              <td><?php echo $patient["last_visit"];?></td>
              <td class="action-cell">
                <a href="patient_edit.php?id=<?php echo (int) $patient['id']; ?>" class="btn btn-xs btn-admin-primary" data-edit><i class="fa fa-pencil"></i></a>
                <a href="patient_delete.php?id=<?php echo (int) $patient['id']; ?>" class="btn btn-xs btn-danger" data-delete><i class="fa fa-trash"></i></a>
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
        <li><a href="#">»</a></li>
      </ul>
    </section>
    <div class="modal fade" id="patient-modal" tabindex="-1" role="dialog" aria-labelledby="patient-modal-title">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="save-form">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
              <h4 class="modal-title" id="patient-modal-title">Add Patient</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label>Name</label>
                  <input class="form-control" placeholder="Patient name">
                </div>
                <div class="col-sm-6 form-group">
                  <label>Age</label>
                  <input class="form-control" type="number" placeholder="Age">
                </div>
                <div class="col-sm-6 form-group">
                  <label>Gender</label>
                  <select class="form-control">
                    <option>Female</option>
                    <option>Male</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="col-sm-6 form-group">
                  <label>Phone</label>
                  <input class="form-control" placeholder="Phone number">
                </div>
                <div class="col-sm-12 form-group">
                  <label>Email</label>
                  <input class="form-control" type="email" placeholder="Email address">
                </div>
                <div class="col-sm-12 form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-admin-primary">Save Patient</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/admin.js"></script>
</body>
</html>
