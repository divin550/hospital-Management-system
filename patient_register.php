<?php
require_once "components/connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $image = $_FILES["picture"]["name"];
    $tmp_name = $_FILES["picture"]['tmp_name'];
    $imageName = "images/" . rand(1000, 999999) . $image;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dateOfBirth = $_POST["DOB"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirmPass = $_POST["confirm_password"];
    if ($password !== $confirmPass) {
        echo "<script>alert('Passwords do not match'); window.    location='signup.php';</script>";
        exit;
    
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

     // Move the image into the hospital/images folder
    $imagePath = __DIR__ . "/" . $imageName;


    if (move_uploaded_file($tmp_name, $imagePath)) {
        $query = "INSERT INTO patient_table(photo, name, email, phone, date_of_birth, age, gender, password)VALUES('$imageName', '$name', '$email', '$phone', '$dateOfBirth','$age', '$gender', '$password')";

        $ins = mysqli_query($con, $query);
        if ($ins) {
            header("Location: dashboard.php");
            exit;
            # code...
        }else {
             // Delete uploaded image if database insertion fails
            unlink($imagePath);

            echo "<script>alert('Data not inserted'); window.location='signup.php';</script>";
            exit;
        }
       
        # code...
    }else {
        echo "<script>alert('Image upload failed')</script>";
        exit;
    }
    


    
} else {
    header('Location: signup.php');
    exit;
}
?>