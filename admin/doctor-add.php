<?php
require_once "../components/connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? "";
    $specialty = $_POST["specialty"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $email = $_POST["email"] ?? "";
    $photo = $_FILES["photo"] ?? null;
    $photoName = $photo['name'];
    $folder = "../images/" . rand(1000, 999999) . $photoName;
    $tmpName = $photo["tmp_name"];
    $status = $_POST["status"] ?? "";
    $availableFrom = $_POST["available-from"] ?? "";
    $availableUntil = $_POST["available-until"] ?? "";
    $workingDays = $_POST["working-days"] ?? "";

    $query = "INSERT INTO doctor_table(name, specialty, phone, email, photo, status, available_from, available_until, working_days) VALUES (?,?,?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt,
     "sssssssss",
      $name, 
      $specialty, 
      $phone, 
      $email, 
      $folder, 
      $status, 
      $availableFrom, 
      $availableUntil, 
      $workingDays
      );
      if (move_uploaded_file($tmpName, $folder)) {
        mysqli_stmt_execute($stmt);
        echo "<script>alert('Doctor added successfully!';) window.location = 'doctors.php'</script>";
    } else {
          echo "<script>alert('Error while adding doctor'); window.location = 'doctors.php' </script>";
    }

}else{
    header("location: doctors.php");
    exit;
}
?>