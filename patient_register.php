<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo $_SERVER["REQUEST_METHOD"] === "POST";
} else {
    header('Location: signup.php');
    exit;
}
?>