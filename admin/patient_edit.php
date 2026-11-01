<?php
require_once "../components/connection.php";

$id = $_GET["id"];

// Get existing patient information
$query = "SELECT * FROM patient_table WHERE id = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$patient = mysqli_fetch_assoc($result);

if (isset($_POST["update"])) {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];

    // Keep the existing photo
    $photoPath = $patient["photo"];

    // Check if a new photo was uploaded
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] === UPLOAD_ERR_OK) {

        $photoName = $_FILES["photo"]["name"];
        $tempName = $_FILES["photo"]["tmp_name"];

        // Save the new photo in the images folder
        $newPhoto = "../images/" . time() . "_" . basename($photoName);

        if (move_uploaded_file($tempName, $newPhoto)) {
            // Store the photo path in the database
            $photoPath = "images/" . time() . "_" . basename($photoName);
        }
    }

    // Update patient information
    $query = "UPDATE patient_table
              SET name = ?, age = ?, phone = ?, photo = ?
              WHERE id = ?";

    $stmt = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param(
        $stmt,
        "sissi",
        $name,
        $age,
        $phone,
        $photoPath,
        $id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: patients.php");
        exit;
    }

    echo "Error updating patient.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Patient | Health Center Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page" data-title="Edit Patient">
  <main class="admin-content">
    <section class="admin-card">
      <div class="admin-card-heading">
        <h2>Edit Patient</h2>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="photo">Photo</label>
          <input class="form-control" id="photo" name="photo" type="file" accept="image/*">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($patient["name"]); ?>" required>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input class="form-control" id="age" name="age" type="number" value="<?php echo htmlspecialchars($patient["age"]); ?>" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($patient["phone"]); ?>" required>
        </div>
        <button class="btn btn-admin-primary" type="submit" name="update">Update Patient</button>
        <a class="btn btn-default" href="patients.php">Cancel</a>
      </form>
    </section>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/admin.js"></script>
</body>
</html>
