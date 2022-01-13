<?php
include('data.php');
$pending = "SELECT * FROM pending";
$checkmsg = mysqli_query($db,$pending);
$totalpending = mysqli_num_rows($checkmsg);


$clients = "SELECT * FROM clients";
$clientresult = mysqli_query($db,$clients);
$totalclients = mysqli_num_rows($clientresult);

$affiliate = "SELECT * FROM affiliates";
$affiliateresult = mysqli_query($db,$affiliate);
$totalaffiliate = mysqli_num_rows($affiliateresult);

if (isset($_GET['identifyd'])) {
    $identifyd = $db -> real_escape_string($_GET['identifyd']);
    $getinfod = "DELETE FROM pending WHERE id='$identifyd'";
    $getinforesultd = mysqli_query($db,$getinfod);
  }


error_reporting(0);$date = date('Y-m-d', strtotime($date. ' + 10 days'));
if (isset($_GET['identify'])) {
    $identify = $db -> real_escape_string($_GET['identify']);
    $getinfo = "SELECT * FROM pending WHERE id='$identify'";
    $getinforesult = mysqli_query($db,$getinfo);
      $getinfodetails=mysqli_fetch_array($getinforesult,MYSQLI_ASSOC);

      $theamount=   $getinfodetails['amount'];
      $thespecialid= $getinfodetails['specialid'] ;
      $theaddress= $getinfodetails['address'] ;
      if($getinfodetails['currency'] == "Bitcoin"){
        $thecurrency = 'Btc';
        $insertholding = "UPDATE holding SET btc='$theamount', btcdate='$date' WHERE specialid='$thespecialid'";
        $insertholdingresult = mysqli_query($db,$insertholding);
        if($insertholdingresult){
          $inserttran = "INSERT INTO transactions(type, currency, amount, specialid, wallet) VALUES ('in','$thecurrency','$theamount','$thespecialid','$theaddress')";
          $inserttranresult = mysqli_query($db,$inserttran);
          if($inserttranresult){
            $delete = "DELETE FROM pending WHERE id='$identify'";
            $deleteresult = mysqli_query($db,$delete);
          }
        }

    }

    if($getinfodetails['currency'] == "Ethereum"){
      $thecurrency = 'eth';
      $insertholding = "UPDATE holding SET eth='$theamount', ethdate='$date' WHERE specialid='$thespecialid'";
      $insertholdingresult = mysqli_query($db,$insertholding);
      if($insertholdingresult){
        $inserttran = "INSERT INTO transactions(type, currency, amount, specialid, wallet) VALUES ('in','$thecurrency','$theamount','$thespecialid','$theaddress')";
        $inserttranresult = mysqli_query($db,$inserttran);
        if($inserttranresult){
          $delete = "DELETE FROM pending WHERE id='$identify'";
          $deleteresult = mysqli_query($db,$delete);
        }
      }

  }

  if($getinfodetails['currency'] == "Litecoin"){
    $thecurrency = 'ltc';
    $insertholding = "UPDATE holding SET ltc='$theamount', ltcdate='$date' WHERE specialid='$thespecialid'";
    $insertholdingresult = mysqli_query($db,$insertholding);
    if($insertholdingresult){
      $inserttran = "INSERT INTO transactions(type, currency, amount, specialid, wallet) VALUES ('in','$thecurrency','$theamount','$thespecialid','$theaddress')";
      $inserttranresult = mysqli_query($db,$inserttran);
      if($inserttranresult){
        $delete = "DELETE FROM pending WHERE id='$identify'";
        $deleteresult = mysqli_query($db,$delete);
      }
    }

}

if($getinfodetails['currency'] == "Doge"){
  $thecurrency = 'doge';
  $insertholding = "UPDATE holding SET doge='$theamount', dogedate='$date' WHERE specialid='$thespecialid'";
  $insertholdingresult = mysqli_query($db,$insertholding);
  if($insertholdingresult){
    $inserttran = "INSERT INTO transactions(type, currency, amount, specialid, wallet) VALUES ('in','$thecurrency','$theamount','$thespecialid','$theaddress')";
    $inserttranresult = mysqli_query($db,$inserttran);
    if($inserttranresult){
      $delete = "DELETE FROM pending WHERE id='$identify'";
      $deleteresult = mysqli_query($db,$delete);
    }
  }

}

if($getinfodetails['currency'] == "Ripple"){
  $thecurrency = 'xrp';
  $insertholding = "UPDATE holding SET xrp='$theamount', xrpdate='$date' WHERE specialid='$thespecialid'";
  $insertholdingresult = mysqli_query($db,$insertholding);
  if($insertholdingresult){
    $inserttran = "INSERT INTO transactions(type, currency, amount, specialid, wallet) VALUES ('in','$thecurrency','$theamount','$thespecialid','$theaddress')";
    $inserttranresult = mysqli_query($db,$inserttran);
    if($inserttranresult){
      $delete = "DELETE FROM pending WHERE id='$identify'";
      $deleteresult = mysqli_query($db,$delete);
    }
  }

}

  }


  if(isset($_POST["add"])){
      function random_strings($length_of_string)
      {
          $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
          return substr(str_shuffle($str_result),
                          0, $length_of_string);
      }
      $generate = random_strings(50);
      $generate = md5($generate);
      $qu = "SELECT * FROM affiliates WHERE specialid = '$generate'";
      $row = mysqli_query($db,$qu);
      if(mysqli_num_rows($row) >0){
          $generate = random_strings(20);
          $generate = md5($generate);
          }

          function random($length_of_string)
          {
              $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
              return substr(str_shuffle($str_result),
                              0, $length_of_string);
          }
          $gen = random(7);
          $qui = "SELECT * FROM affiliates WHERE referalcode = '$gen'";
          $rowi = mysqli_query($db,$qui);
          if(mysqli_num_rows($rowi) >0){
              $gen = random(6);
              }



      $name =$db -> real_escape_string($_POST['name']);
      $email =$db -> real_escape_string($_POST['email']);
      $password = $db -> real_escape_string($_POST['password']);
      $address = $db ->real_escape_string($_POST['address']);
      $gender = $db -> real_escape_string($_POST['gender']);
      $referbalance = $db -> real_escape_string($_POST['referbalance']);
      $plans= "none";

      $password =md5($password);
      $specialid = $generate;
      $days = 0;


      $ql = "SELECT * FROM affiliates WHERE email ='$email' || password ='$password'";
      $result = mysqli_query($db,$ql);

      if(mysqli_num_rows($result) >0){
      echo "User already exist";
      }
      else if(mysqli_num_rows($result) == 0){
      $query="INSERT INTO affiliates(name, email, specialid, password, address, gender, referalcode, referalbalance, plans, days)
       VALUES
        ('$name','$email','$specialid','$password','$address','$gender','$gen','$referbalance','$plans','$days')";
        $re = mysqli_query($db,$query);

        if($re){
          $holding="INSERT INTO holding(specialid, doge, btc, eth, xrp, ltc, balance, dogedate, xrpdate, btcdate, ethdate, ltcdate)
          VALUES
           ('$specialid',10000,20000,1000,2000,500,60000,'$date','$date','$date','$date','$date')";
           $holdingresult=mysqli_query($db,$holding);
        }


      }
  }
  if(isset($_POST["addtran"])){
          $special =$db -> real_escape_string($_POST['special']);
          $currency =$db -> real_escape_string($_POST['currency']);
          $amount = $db -> real_escape_string($_POST['amount']);
          $wallet = $db ->real_escape_string($_POST['wallet']);
          $type = $db -> real_escape_string($_POST['type']);

          $sendtran = "INSERT INTO transactions(type, currency, amount, specialid, wallet)
          VALUES
          ('$type','$currency','$amount','$special','$wallet')";
          $sendresult = mysqli_query($db,$sendtran);
  }
?>
