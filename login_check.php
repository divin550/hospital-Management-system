<?php
require_once "components/connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM patient_table WHERE email = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) === 1) {
        $patient = mysqli_fetch_assoc($result);
        if (password_verify($password, $patient["password"])) {
            session_start();
            $_SESSION["patient_id"] = $patient["id"];
            $_SESSION["patient_name"] = $patient["name"];

           echo "<script>alert('login successful'); window.location = 'dashboard.php'</script>";
            exit;
            # code...
        }else {
            echo "<script>alert('Incorrect password'); window.location='login.php';</script>";
            exit;
        }
        # code...
    } else{
        echo "<script>alert('Email not found'); window.location='login.php';</script>";
        exit;
    } 
    # code...
}

?>