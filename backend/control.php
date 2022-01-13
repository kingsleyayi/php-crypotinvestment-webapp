<?php
include('troll/data.php');
$date = date('Y-m-d');
$getdata = "SELECT * FROM holding";
$getdataquery = mysqli_query($db,$getdata);
while($getdatadetails=mysqli_fetch_assoc($getdataquery)){
$balance = $getdatadetails['balance'];
$specialid = $getdatadetails['specialid'];
$btc= $getdatadetails['btc'];
$ltc = $getdatadetails['ltc'];
$eth = $getdatadetails['eth'];
$doge = $getdatadetails['doge'];
$xrp = $getdatadetails['xrp'];
$btcdate = $getdatadetails['btcdate'];
$ltcdate = $getdatadetails['ltcdate'];
$ethdate = $getdatadetails['ethdate'];
$dogedate = $getdatadetails['dogedate'];
$xrpdate = $getdatadetails['xrpdate'];


 if ($btcdate == $date) {
   if($btc == 500){
   $btc  = 1500;
   }
   elseif($btc  == 1000){
     $btc = 3000;
   }
 elseif($btc  == 2000){
   $btc  = 6000;
   }
   elseif($btc  == 5000){
     $btc  = 15000;
   }
 elseif($btc  == 10000){
     $btc  = 30000;
   }
   elseif($btc  == 20000){
     $btc  = 60000;
   }

  $newbalance = $btc + $balance;
  $dataupdate = "UPDATE holding SET balance='$newbalance',btc=0,btcdate=0 WHERE specialid='$specialid'";
  $dataupdatequery = mysqli_query($db,$dataupdate);
}

elseif ($ethdate == $date) {
  if($eth == 500){
  $eth  = 1500;
  }
  elseif($eth  == 1000){
    $eth = 3000;
  }
elseif($eth  == 2000){
  $eth  = 6000;
  }
  elseif($eth  == 5000){
    $eth  = 15000;
  }
elseif($eth  == 10000){
    $eth  = 30000;
  }
  elseif($eth  == 20000){
    $eth  = 60000;
  }

  $newbalance = $eth + $balance;
  $dataupdate = "UPDATE holding SET balance='$newbalance',eth=0,ethdate=0 WHERE specialid='$specialid'";
  $dataupdatequery = mysqli_query($db,$dataupdate);
}

elseif ($ltcdate == $date) {
  if($ltc == 500){
  $ltc  = 1500;
  }
  elseif($ltc  == 1000){
    $ltc = 3000;
  }
elseif($ltc  == 2000){
  $ltc  = 6000;
  }
  elseif($ltc  == 5000){
    $ltc  = 15000;
  }
elseif($ltc  == 10000){
    $ltc  = 30000;
  }
  elseif($ltc  == 20000){
    $ltc  = 60000;
  }

  $newbalance = $ltc + $balance;
  $dataupdate = "UPDATE holding SET balance='$newbalance',ltc=0,ltcdate=0 WHERE specialid='$specialid'";
  $dataupdatequery = mysqli_query($db,$dataupdate);
}


elseif ($xrpdate == $date) {
  if($xrp == 500){
  $xrp  = 1500;
  }
  elseif($xrp  == 1000){
    $xrp = 3000;
  }
elseif($xrp  == 2000){
  $xrp  = 6000;
  }
  elseif($xrp  == 5000){
    $xrp  = 15000;
  }
elseif($xrp  == 10000){
    $xrp  = 30000;
  }
  elseif($xrp  == 20000){
    $xrp  = 60000;
  }


  $newbalance = $xrp + $balance;
  $dataupdate = "UPDATE holding SET balance='$newbalance',xrp=0,xrpdate=0 WHERE specialid='$specialid'";
  $dataupdatequery = mysqli_query($db,$dataupdate);
}

elseif ($dogedate == $date) {
  if($doge == 500){
  $doge  = 1500;
  }
  elseif($doge  == 1000){
    $doge = 3000;
  }
elseif($doge  == 2000){
  $doge  = 6000;
  }
  elseif($doge  == 5000){
    $doge  = 15000;
  }
elseif($doge  == 10000){
    $doge  = 30000;
  }
  elseif($doge  == 20000){
    $doge  = 60000;
  }

  $newbalance = $doge + $balance;
  $dataupdate = "UPDATE holding SET balance='$newbalance',doge=0,dogedate=0 WHERE specialid='$specialid'";
  $dataupdatequery = mysqli_query($db,$dataupdate);
}

}

 ?>
