<?php
if (isset($_GET['btc'])) {
    $amount = $db -> real_escape_string($_GET['btc']);
    $scancode = "btccode.png";
    $sendto = "bc1qpwedaggqymc3dc9vsgakux5nf7pq95kp9tzd2a";
    $currency = "Bitcoin";
    $converter= '<script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget coin-id="bitcoin" currency="usd" background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>';

  }elseif(isset($_GET['doge'])){
    $amount = $db -> real_escape_string($_GET['doge']);
    $scancode = "dogecode.png";
    $sendto = "DU7bYr7Umhxj4jaSWNFcSb5wUFMkHH5JK2";
    $currency = "Doge";
    $converter= '<script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget currency="usd"  coin-id="dogecoin"  background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>';


  }elseif(isset($_GET['eth'])){
    $amount = $db -> real_escape_string($_GET['eth']);
    $scancode = "ethcode.png";
    $sendto = "0x614E238eE847Cf9977FE2BC42BdB604b011C9656";
    $currency = "Ethereum";
    $converter= '<script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget currency="usd"  coin-id="ethereum"  background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>';


  }elseif(isset($_GET['ltc'])){
    $amount = $db -> real_escape_string($_GET['ltc']);
    $scancode = "ltccode.png";
    $sendto = "ltc1qht9rrrn22xjjzqjjp3g5d00tvjhhacfeux32sw";
    $currency = "Litecoin";
    $converter= '<script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget currency="usd"  coin-id="litecoin"  background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>';



  }elseif(isset($_GET['xrp'])){
    $amount = $db -> real_escape_string($_GET['xrp']);
    $scancode = "xrpcode.png";
    $sendto = "rU5pa5EJXrVpw84aG7Xd74xWZYo8rpfeug";
    $currency = "Ripple";
    $converter= '<script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget currency="usd"  coin-id="ripple"  background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>';



  }


  if(isset($_POST["paid"])){
    $address = $db -> real_escape_string($_POST['address']);
    $sendpay = "INSERT INTO pending(specialid, currency, name, address, amount)
     VALUES
      ('$id','$currency','$name','$address','$amount')";
    $sendresult = mysqli_query($db,$sendpay);
    if($sendresult){
      echo "<script>alert('Payment undergoing confirmation');</script>";
    }
  }


 ?>
