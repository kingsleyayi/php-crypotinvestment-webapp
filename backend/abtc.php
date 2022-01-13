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


<div class="content-body">
    <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-4">
              <div class="card settings_menu">
                  <div class="card-header">
                      <h4 class="card-title">Currency options</h4>
                  </div>
                  <div class="card-body">
                      <ul>
                          <li class="nav-item">
                              <a href="abtc.php" class="nav-link active">
                                  <i class="cc BTC-alt"></i>
                                  <span>Bitcoin investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="aeth.php" class="nav-link">
                                  <i class="cc ETH-alt"></i>
                                  <span>Ethereum investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="altc.php" class="nav-link">
                                  <i class="cc LTC-alt"></i>
                                  <span>Litecoin investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="axrp.php" class="nav-link">
                                  <i class="cc XRP-alt"></i>
                                  <span>Ripple investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="adoge.php" class="nav-link">
                                  <i class="cc DOGE-alt"></i>
                                  <span>Doge investment</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
            <div class="col-xl-9 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Investment Plans</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">

                                    <img src="images/second.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3>$100 - $350</h3>
                                    <p class="mb-1 mt-3">250% ROI + intial capital in 10Days </p>
                                    <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $350</p>
                                    <a href="apayment?btc=100" class="btn btn-success mt-3">Invest</a>
                                </div>
                            </div>
                        </div>


                    </div>
<hr>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">

                                    <img src="images/second.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3>$250 - $875</h3>
                                    <p class="mb-1 mt-3">250% ROI + intial capital in 10Days </p>
                                    <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $875</p>
                                    <a href="apayment?btc=250" class="btn btn-success mt-3">Invest</a>
                                </div>
                            </div>
                        </div>


                    </div>
<hr>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">

                                    <img src="images/second.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3>$500 - $1750</h3>
                                    <p class="mb-1 mt-3">250% ROI + intial capital in 10Days </p>
                                    <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $1750</p>
                                    <a href="apayment?btc=500" class="btn btn-success mt-3">Invest</a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">

                                    <img src="images/second.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3>$1000 - $5000</h3>
                                    <p class="mb-1 mt-3">500% ROI + intial capital in 10Days </p>
                                    <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $5000</p>
                                    <a href="apayment?btc=1000" class="btn btn-success mt-3">Invest</a>
                                </div>
                            </div>
                        </div>


                    </div>
<hr>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">

                                    <img src="images/second.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3>$2000 - $10000</h3>
                                    <p class="mb-1 mt-3">500% ROI + intial capital in 10Days </p>
                                    <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $10000</p>
                                    <a href="apayment?btc=2000" class="btn btn-success mt-3">Invest</a>
                                </div>
                            </div>
                        </div>


                    </div>
<hr>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">

                                    <img src="images/second.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3>$5000 - $25000</h3>
                                    <p class="mb-1 mt-3">500% ROI + intial capital in 10Days </p>
                                    <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $25000</p>
                                    <a href="apayment?btc=5000" class="btn btn-success mt-3">Invest</a>
                                </div>
                            </div>
                        </div>


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

</html>
