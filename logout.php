<?php
session_start();

session_unset();
session_destroy();

echo "<script>alert('logout successful'); window.location = 'index.php'</script>";
exit;
?>