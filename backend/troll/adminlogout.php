<?php
session_start();
unset($_SESSION['meand']);
header("location: login.php");
?>
