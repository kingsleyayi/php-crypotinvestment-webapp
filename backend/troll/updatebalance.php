<?php
session_start();
$_SESSION['meand'];
$id = $_SESSION['meand'];
if(!isset($id)){
    header('location: login.php');
}


?>
<?php
include('adminhandling.php');

?>
<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">update balance</a>
        </li>
    </ul>
</div>

<?php


if (isset($_GET['id'])) {
    $special= $db -> real_escape_string($_GET['id']);

    $balance = "SELECT * FROM holding WHERE specialid = '$special'";
    $balanceresult =mysqli_query($db,$balance);
    $balancedetail=mysqli_fetch_array($balanceresult,MYSQLI_ASSOC);
    $btc = $balancedetail['btc'];
    $eth = $balancedetail['eth'];
    $doge = $balancedetail['doge'];
    $xrp = $balancedetail['xrp'];
    $ltc = $balancedetail['ltc'];
  }

  if (isset($_POST['updatebalance'])) {
    $ubtc =$db -> real_escape_string($_POST['btc']);
    $ueth =$db -> real_escape_string($_POST['eth']);
    $ultc =$db -> real_escape_string($_POST['ltc']);
    $udoge =$db -> real_escape_string($_POST['doge']);
    $uxrp =$db -> real_escape_string($_POST['xrp']);

    $updatehold = "UPDATE holding SET btc='$ubtc', eth='$ueth', xrp='$uxrp', ltc='$ultc', doge='$udoge' WHERE specialid='$special'";
     $updateresult=mysqli_query($db,$updatehold);
     if($updateresult){
       echo "<script>alert('balance updated');window.location.replace('www.skyprimemining/backend/troll/addbalance');</script>";
     }

  }

 ?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">

          <div class="well col-md-5 center login-box">

              <form class="form-horizontal" method="POST"  enctype="multipart/form-data">
                  <fieldset>
                    <label>Bitcoin</label>
                      <div class="input-group input-group-lg">

                          <span class="input-group-addon"><i class="glyphicon glyphicon-usd red"></i></span>
                          <input type="text" class="form-control" name="btc" value="<?php echo $btc; ?>" required>
                      </div>
                      <div class="clearfix"></div><br>

                      <label>Ethereum</label>
                        <div class="input-group input-group-lg">

                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd red"></i></span>
                            <input type="text" class="form-control" name="eth" value="<?php echo $eth; ?>" required>
                        </div>
                        <div class="clearfix"></div><br>

                        <label>Litecoin</label>
                          <div class="input-group input-group-lg">

                              <span class="input-group-addon"><i class="glyphicon glyphicon-usd red"></i></span>
                              <input type="text" class="form-control" name="ltc" value="<?php echo $ltc; ?>" required>
                          </div>
                          <div class="clearfix"></div><br>

                          <label>Doge</label>
                            <div class="input-group input-group-lg">

                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd red"></i></span>
                                <input type="text" class="form-control" name="doge" value="<?php echo $doge; ?>" required>
                            </div>
                            <div class="clearfix"></div><br>
                            <label>Ripple</label>
                              <div class="input-group input-group-lg">

                                  <span class="input-group-addon"><i class="glyphicon glyphicon-usd red"></i></span>
                                  <input type="text" class="form-control" name="xrp" value="<?php echo $xrp; ?>" required>
                              </div>
                              <div class="clearfix"></div><br>




                      <p class="center col-md-5">
                          <button type="submit" class="btn btn-primary" name="updatebalance">updatebalance</button>
                      </p>
                  </fieldset>
              </form>
          </div>
          <!--/span-->


    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <!--/span-->



<?php require('footer.php'); ?>
<style>
.circular--portrait {
  position: relative;
  width: 20vw;
  height: 20vw;
  overflow: hidden;

}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</Style>
