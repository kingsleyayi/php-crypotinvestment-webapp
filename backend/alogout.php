<?php
session_start();
unset($_SESSION['special']);
header("location: alogin.php");
?>
