<?php
require_once "../components/connection.php";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

if ($id < 1) {
    exit("Invalid doctor ID.");
}

$query = "SELECT * FROM doctor_table WHERE id = ?";
$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$doctor = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$doctor) {
    exit("Doctor not found.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $query = "UPDATE doctor_table
              SET name = ?, specialty = ?, phone = ?, email = ?, status = ?,
                  available_from = ?, available_until = ?, working_days = ?
              WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param(
        $stmt,
        "ssssssssi",
        $_POST["name"],
        $_POST["specialty"],
        $_POST["phone"],
        $_POST["email"],
        $_POST["status"],
        $_POST["available-from"],
        $_POST["available-until"],
        $_POST["working-days"],
        $id
    );

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: doctors.php");
        exit;
    }

    $error = "Could not update the doctor.";
    mysqli_stmt_close($stmt);
}

function escapeValue($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Doctor | Health Center Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page" data-title="Edit Doctor">
  <main class="admin-content">
    <section class="admin-card">
      <div class="admin-card-heading">
        <h2>Edit Doctor</h2>
      </div>

      <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo escapeValue($error); ?></div>
      <?php endif; ?>

      <form method="post" action="doctor-edit.php?id=<?php echo $id; ?>">
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" id="name" name="name" value="<?php echo escapeValue($doctor["name"]); ?>" required>
        </div>
        <div class="form-group">
          <label for="specialty">Specialty</label>
          <input class="form-control" id="specialty" name="specialty" value="<?php echo escapeValue($doctor["specialty"]); ?>" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input class="form-control" id="phone" name="phone" value="<?php echo escapeValue($doctor["phone"]); ?>" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" id="email" name="email" type="email" value="<?php echo escapeValue($doctor["email"]); ?>" required>
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" id="status" name="status">
            <option value="Active"<?php echo $doctor["status"] === "Active" ? " selected" : ""; ?>>Active</option>
            <option value="Inactive"<?php echo $doctor["status"] === "Inactive" ? " selected" : ""; ?>>Inactive</option>
          </select>
        </div>
        <div class="form-group">
          <label for="available-from">Available From</label>
          <input class="form-control" id="available-from" name="available-from" type="time" value="<?php echo escapeValue(substr((string) $doctor["available_from"], 0, 5)); ?>">
        </div>
        <div class="form-group">
          <label for="available-until">Available Until</label>
          <input class="form-control" id="available-until" name="available-until" type="time" value="<?php echo escapeValue(substr((string) $doctor["available_until"], 0, 5)); ?>">
        </div>
        <div class="form-group">
          <label for="working-days">Working Days</label>
          <input class="form-control" id="working-days" name="working-days" value="<?php echo escapeValue($doctor["working_days"]); ?>" placeholder="e.g. Monday-Friday">
        </div>

        <button class="btn btn-admin-primary" type="submit">Update Doctor</button>
        <a class="btn btn-default" href="doctors.php">Cancel</a>
      </form>
    </section>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/admin.js"></script>
</body>
</html>
