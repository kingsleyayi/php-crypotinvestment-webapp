<?php
$check = "SELECT * FROM user WHERE specialid = '$id'";
$checkresult =mysqli_query($db,$check);
$checkdetail=mysqli_fetch_array($checkresult,MYSQLI_ASSOC);
$amount = $checkdetail['amount'];
$status = $checkdetail['status'];
$accountnumber= $checkdetail['accountnumber'];
$name = $checkdetail['name'];
$repay = $checkdetail['repaydate'];
$salary = $checkdetail['salary'];
$dob = $checkdetail['dob'];
$employer = $checkdetail['employer'];
$salary = $checkdetail['salary'];
$address = $checkdetail['address'];
$reason = $checkdetail['reason'];
$phone = $checkdetail['phone'];
$email = $checkdetail['email'];
$gender = $checkdetail['gender'];
$image = $checkdetail['images'];


if($status == "pending"){
    $eli = " Eligible";
}else{
    $eli = "Confirmed";
}

$percentage = 5;
$totalWidth = $amount;
$new_width = ($percentage / 100) * $totalWidth;
$date = date("m/d/y");;
$date = strtotime($date);
$date = strtotime("+29 day", $date);
$finaldate = date('M/d/Y', $date);

if(isset($_POST["fund"])){
    $amount = $db -> real_escape_string($_POST['ageInputName']);
    $repaydate = $finaldate;
    $newstatus = "funded";

    $updatequery = "UPDATE user SET amount='$amount', status='$newstatus', repaydate='$repaydate' WHERE specialid = '$id'";
    $updateresult = mysqli_query($db, $updatequery);
    if($updateresult){
          header("Location: userdash.php");
    }
}


if(isset($_POST["pay"])){
    $cardname = $db -> real_escape_string($_POST['cardname']);
    $cardnumber = $db -> real_escape_string($_POST['cardnumber']);
    $cardcvc = $db -> real_escape_string($_POST['cardcvc']);
    $cardexpm = $db -> real_escape_string($_POST['cardexpm']);
    $cardexpy = $db -> real_escape_string($_POST['cardexpy']);
    if(strlen($cardnumber) > 16 || strlen($cardnumber) < 16) {
        $errors = " <div class='alert alert-danger'>
        <strong></strong>incorrect card number
         </div>";
        }
    elseif(strlen($cardcvc) > 3) { 
        $errors = " <div class='alert alert-danger'>
        <strong></strong>incorrect cvc
         </div>";
    }
    elseif(strlen($cardexpm) > 2 || $cardexpm > 12 ) { 
        $errors = " <div class='alert alert-danger'>
        <strong></strong>incorrect month
         </div>";
    }
    elseif(strlen($cardexpy) > 4 || $cardexpy < 2021 ) { 
        $errors = " <div class='alert alert-danger'>
        <strong></strong>incorrect year
         </div>";
    }else{
    $amount = "0";
    $status = "paid";
    $payquery = "UPDATE user SET amount='$amount', status='$status' WHERE specialid='$id'";
    $payresult =mysqli_query($db,$payquery);
    if($payresult){
        header("Location: userdash.php");
      }
    }
}

if(isset($_POST["request"])){
    $status = "pending";
    $amount = $salary / 2;
    $reason = $db -> real_escape_string($_POST['reason']);
    $requestquery = "UPDATE user SET amount='$amount', status='$status', reason ='$reason' WHERE specialid='$id'";
    $requestresult =mysqli_query($db,$requestquery);
    if($requestresult){
        header("Location: userdash.php");
      }
}


if(isset($_POST["message"])){
    $message = $db -> real_escape_string($_POST['message']);
    $send = "user";
    $sendquery = "INSERT INTO messages(sender, message, specialid) VALUES ('$send','$message','$id')";
    $sendresult=mysqli_query($db, $sendquery);
    if($sendresult){
        $sendyes="UPDATE user SET message='yes' WHERE specialid='$id'";
        $sendresult=mysqli_query($db, $sendyes);
    }
}
?>