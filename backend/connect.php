<?php
include('troll/data.php');

if(isset($_POST["apply"])){
    function random_strings($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result),
                        0, $length_of_string);
    }
    $generate = random_strings(50);
    $generate = md5($generate);
    $qu = "SELECT * FROM clients WHERE specialid = '$generate'";
    $row = mysqli_query($db,$qu);
    if(mysqli_num_rows($row) >0){
        $generate = random_strings(20);
        $generate = md5($generate);
        }



    $name =$db -> real_escape_string($_POST['name']);
    $email =$db -> real_escape_string($_POST['email']);
    $password = $db -> real_escape_string($_POST['password']);
    $address = $db ->real_escape_string($_POST['address']);
    $gender = $db -> real_escape_string($_POST['gender']);
    $refer = $db -> real_escape_string($_POST['refer']);
    $plans= "none";

    $password =md5($password);
    $specialid = $generate;
    $days = 0;


    $ql = "SELECT * FROM clients WHERE email ='$email' || password ='$password'";
    $result = mysqli_query($db,$ql);

    if(mysqli_num_rows($result) >0){
    echo "User already exist";
    }
    elseif(mysqli_num_rows($result) == 0){
    $query="INSERT INTO clients(specialid, name, password, email, address, gender,plan,daysleft,refer)
    VALUES
    ('$specialid','$name','$password','$email','$address', '$gender', '$plans', '$days', '$refer')";
    $re = mysqli_query($db,$query);
    if($re){
      $holding="INSERT INTO holding(specialid, doge, btc, eth, xrp, ltc, balance, dogedate, xrpdate, btcdate, ethdate, ltcdate)
      VALUES
       ('$specialid',0.00,0.00,0.00,0.00,0.00,0.00,'0','0','0','0','0')";
       $holdingresult=mysqli_query($db,$holding);
       if($holdingresult){

          header("Location: login.php");
        }
    }

    }
}

if(isset($_POST["login"])){
    $mail = $db -> real_escape_string($_POST['email']);
    $password = $db -> real_escape_string($_POST['password']);
    $password = md5($password);
    $sql = "SELECT * FROM clients WHERE email = '$mail' && password ='$password'";
    $re = mysqli_query($db,$sql);
    $rs =mysqli_fetch_array($re, MYSQLI_ASSOC);
    $de = $rs['specialid'];
    if($de){
        session_start();
        $_SESSION['specialid'] = $de;
        header("Location: dashboard.php");
    }else{
        $show = "Incorrect email or password";
    }

}


?>
