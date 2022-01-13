<?php
session_start();
$_SESSION['admin'];
$id = $_SESSION['admin'];
if(!isset($id)){
    header('location: adminlogin.php');
}
$db = new mysqli('localhost','root','','manageloan');
if (isset($_GET['chatdel'])) {
    $speicalid = $db -> real_escape_string($_GET['chatdel']);
    $getid = mysqli_query($db, "DELETE FROM pending WHERE specialid='$speicalid'");
}
?>
