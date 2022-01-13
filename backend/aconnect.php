<?php

include('troll/data.php');


if(isset($_POST["login"])){
    $mail = $db -> real_escape_string($_POST['email']);
    $password = $db -> real_escape_string($_POST['password']);
    $password = md5($password);
    $sql = "SELECT * FROM affiliates WHERE email = '$mail' && password ='$password'";
    $re = mysqli_query($db,$sql);
    $rs =mysqli_fetch_array($re, MYSQLI_ASSOC);
    $de = $rs['specialid'];
    if($de){
        session_start();
        $_SESSION['special'] = $de;
        header("Location: affiliate.php");
    }else{
        $show = "Incorrect email or password";
    }

}

 ?>
