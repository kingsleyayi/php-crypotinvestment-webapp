<?php
include('troll/data.php');
$check = "SELECT * FROM affiliates WHERE specialid = '$id'";
$checkresult =mysqli_query($db,$check);
$checkdetail=mysqli_fetch_array($checkresult,MYSQLI_ASSOC);
$plan = $checkdetail['plans'];
$days = $checkdetail['days'];
$name = $checkdetail['name'];
$address = $checkdetail['address'];
$email = $checkdetail['email'];
$gender = $checkdetail['gender'];
$referbalance= $checkdetail['referalbalance'];
$refercode= $checkdetail['referalcode'];

$balance = "SELECT * FROM holding WHERE specialid = '$id'";
$balanceresult =mysqli_query($db,$balance);
$balancedetail=mysqli_fetch_array($balanceresult,MYSQLI_ASSOC);
$btc = $balancedetail['btc'];
$eth = $balancedetail['eth'];
$doge = $balancedetail['doge'];
$xrp = $balancedetail['xrp'];
$ltc = $balancedetail['ltc'];
$dogedate = $balancedetail['dogedate'];
$xrpdate = $balancedetail['xrpdate'];
$btcdate = $balancedetail['btcdate'];
$ethdate = $balancedetail['ethdate'];
$ltcdate = $balancedetail['ltcdate'];
$balance = $balancedetail['balance'];


?>
