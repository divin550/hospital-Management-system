<?php
require_once "../components/connection.php";
$query = "SELECT * FROM doctor_table";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doctors | Health Center Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page" data-title="Doctors">
  <main class="admin-content">
    <section class="admin-card doctor-directory">
      <div class="admin-card-heading">
        <h2>Medical Team</h2>
        <button class="btn btn-admin-primary" data-toggle="modal" data-target="#doctor-modal">
          <i class="fa fa-plus"></i> Add Doctor
        </button>
      </div>
      <div class="row">
        <?php while ($doctor = mysqli_fetch_assoc($result)){
              
        ?>
        <div class="col-sm-6 col-lg-4">
          <article class="admin-doctor-card">
            <img src="<?php echo $doctor["photo"];?>" alt="Dr. Nate Baston">
            <div class="admin-doctor-info">
              <span class="label label-approved pull-right"><?php echo $doctor["status"];?></span>
              <h3><?php echo $doctor["name"];?></h3>
              <p class="doctor-specialty"><?php echo $doctor["specialty"];?></p>
              <p>
                <i class="fa fa-phone"></i> <?php echo $doctor["phone"];?><br>
                <i class="fa fa-envelope"></i> <?php echo $doctor["email"];?>
              </p>
              <a class="btn btn-xs btn-admin-primary" href="doctor-edit.php?id=<?php echo (int) $doctor['id']; ?>"><i class="fa fa-pencil"></i> Edit</a>
              <a href="doctor-delete.php?id=<?php echo (int) $doctor['id']; ?>" class="btn btn-xs btn-danger" data-delete><i class="fa fa-trash"></i> Delete</a>
            </div>
          </article>
        </div>
        <?php
        }
        ?>
      </div>
    </section>

    <div class="modal fade" id="doctor-modal" tabindex="-1" role="dialog" aria-labelledby="doctor-modal-title">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="doctor-add.php" method="post" class="save-form" enctype="multipart/form-data">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
              <h4 class="modal-title" id="doctor-modal-title">Add Doctor</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input name="name" class="form-control" placeholder="Doctor name">
              </div>
              <div class="form-group">
                <label>Specialty</label>
                <input name="specialty" class="form-control" placeholder="Specialty">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input name="phone" class="form-control" placeholder="Phone number">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control" type="email" placeholder="Email  address">
              </div>
              <div class="form-group">
                <label>Photo</ label>
                <input name="photo" class="form-control" type="file" accept="image/ *">
              </div>
              <div class="form-group">
                <label>Status</ label>
                <select name="status" class="form-control">
                  <option>Active</ option>
                  <option>Inactive</option>
                </select>
              </div>
              <div class="form-group">
                <label for="available-from">Available From</label>
                <input class="form-control" id="available-from" name="available-from" type="time">
              </div>
              <div class="form-group">
                <label for="available-until">Available Until</label>
                <input class="form-control" id="available-until" name="available-until" type="time">
              </div>
              <div class="form-group">
                <label for="working-days">Working Days</label>
                <input class="form-control" id="working-days" name="working-days" type="text" placeholder="e.g. Monday-Friday">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-admin-primary">Save Doctor</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/admin.js?v=doctor-add-POST-fix"></script>
</body>
</html>
