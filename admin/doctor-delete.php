<?php
require_once "../components/connection.php";

$id = $_GET['id'];

$query = "DELETE FROM doctor_table WHERE id = ?";
$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("Location: doctors.php");
    exit;
} else {
    mysqli_stmt_close($stmt);
    echo "<script>
        alert('Error deleting doctor');
        window.location='doctors.php';
    </script>";
    exit;
}
?>