
<?php
session_start();

require_once "components/connection.php";
if (!isset($_SESSION["patient_id"])) {
    echo "<script>
        alert('Please login first to book an appointment.');
        window.location = 'index.php';
    </script>";
    exit;
}

$patientId = $_SESSION["patient_id"];
$appointmentName = $_POST["name"];
$doctorId = $_POST["doctor"];
$patientEmail = $_POST["email"];
$docDepart = $_POST["department"];
$appointmentDate = $_POST["date"];
$appointmentTime = $_POST["time"];
$phone = $_POST["phone"];

$status = "pending";


$query = "INSERT INTO appointment_table_new
(appointment_name, patient_id, doctor_id, appointment_email, department, appointment_date, appointment_time, status, phone)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param(
    $stmt,
    "siissssss",
    $appointmentName,
    $patientId,
    $doctorId,
    $patientEmail,
    $docDepart,
    $appointmentDate,
    $appointmentTime,
    $status,
    $phone
);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>
        alert('Appointment booked successfully!');
        window.location = 'index.php';
    </script>";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
?>

