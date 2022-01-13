<?php
include('data.php');
$show = "Please login with your Username and Password.";
if(isset($_POST["login"])){
    $mail = $db -> real_escape_string($_POST['email']);
    $password = $db -> real_escape_string($_POST['password']);
    $sql = "SELECT * FROM admin WHERE email = '$mail' && password ='$password'";
    $re = mysqli_query($db,$sql);
    $rs =mysqli_fetch_array($re, MYSQLI_ASSOC);
    $de = $rs['id'];
    if($de){
        session_start();
        $_SESSION['meand'] = $de;
        header("Location: admindash.php");
    }else{
        $show = "Incorrect email or password";
    }

}

 ?>
