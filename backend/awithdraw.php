<?php
session_start();
$_SESSION['special'];
$id = $_SESSION['special'];
if(!isset($id)){
    header('location: alogin.php');
}
?>
<?php include('aconnect.php'); ?>
<?php include('auserhandling.php'); ?>
<?php include('atop.php'); ?>
<?php
if(isset($_POST["withdraw"])){
  if($balance == '0'){
    $mess= "no withdrawal balance";
  }else {
    $address = $db -> real_escape_string($_POST['address']);
      $currency = $db -> real_escape_string($_POST['currency']);
      $requestupdate = "UPDATE holding SET balance='0' WHERE specialid='$id'";
      $requestresult =mysqli_query($db,$requestupdate);
      if($requestresult){
          header("Location: userdash.php");
        }

  }
}

 ?>

        <div class="content-body">
            <div class="container">
                <div class="row">


                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdraw</h4>
                            </div>

                            <div class="card-body">
                              <h3><?php error_reporting(0); echo $mess; ?></h3>
                                <form method="post">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"><i class="fa fa-money"></i></label>
                                            </div>
                                            <input type="text" class="form-control" value="<?php echo $balance."USD"; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"><i class="fa fa-bank"></i></label>
                                            </div>
                                            <select class="form-control" name="currency">
                                                <option value="bitcoin">BTC</option>
                                                <option value="ethereum">ETH</option>
                                                <option value="litcoin">LTC</option>
                                                <option value="Ripple">XRP</option>
                                                <option value="Doges">DOGE</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"><i class="fa fa-money"></i></label>
                                            </div>
                                            <input type="text"  name="address" required class="form-control" placeholder="Enter address">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-block" type="submit" name="withdraw">Withdraw Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>



</body>


<!-- Mirrored from demo.themefisher.com/treemium/accounts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 13:13:49 GMT -->
</html>
