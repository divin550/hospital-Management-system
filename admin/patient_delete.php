<?php
require_once "../components/connection.php";

$id = $_GET['id'];

$query = "DELETE FROM patient_table WHERE id = ?";
$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_execute($stmt)) {
    header("Location: patients.php");
    exit;
    # code...
}else{
    echo "<script>alert('Error deleting patient'); window.location='patients.php';</script>";
    exit;
}
mysqli_stmt_close($stmt);
?>
