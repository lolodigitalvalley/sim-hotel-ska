<?php
session_start();
unset($_SESSION['sesUser']);
unset($_SESSION['sesLevel']);
session_destroy();
header('location:index.php');
?>


