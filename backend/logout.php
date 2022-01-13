<?php
session_start();
unset($_SESSION['specialid']);
header("location: login.php");
?>
