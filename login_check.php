
<?php
require_once "components/connection.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];


    // Check admin account first
    $query = "SELECT * FROM admin_table WHERE email = ?";
    $stmt = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {

        $admin = mysqli_fetch_assoc($result);

        if (password_verify($password, $admin["password"])) {

            $_SESSION["admin_id"] = $admin["id"];
            $_SESSION["admin_name"] = $admin["name"];

            header("Location: admin/index.php");
            exit;

        } else {
            echo "Incorrect password";
            exit;
        }
    }


    // If not admin, check patient account
    $query = "SELECT * FROM patient_table WHERE email = ?";
    $stmt = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {

        $patient = mysqli_fetch_assoc($result);

        if (password_verify($password, $patient["password"])) {

            $_SESSION["patient_id"] = $patient["id"];
            $_SESSION["patient_name"] = $patient["name"];
            $_SESSION["patient_photo"] = $patient["photo"];
            $_SESSION["patient_email"] = $patient["email"];
            $_SESSION["patient_age"] = $patient["age"];
            $_SESSION["patient_phone"] = $patient["phone"];

            header("Location: patient-portal.php");
            exit;

        } else {
            echo "Incorrect password";
        }

    } else {
        echo "Email not found";
    }
}
?>
