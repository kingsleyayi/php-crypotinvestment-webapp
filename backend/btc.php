<?php
session_start();
$_SESSION['specialid'];
$id = $_SESSION['specialid'];
if(!isset($id)){
    header('location: login.php');
}
?>
<?php include('connect.php'); ?>
<?php include('userhandling.php'); ?>
<?php include('top.php'); ?>


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
                              <a href="btc.php" class="nav-link active">
                                  <i class="cc BTC-alt"></i>
                                  <span>Bitcoin investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="eth.php" class="nav-link">
                                  <i class="cc ETH-alt"></i>
                                  <span>Ethereum investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="ltc.php" class="nav-link">
                                  <i class="cc LTC-alt"></i>
                                  <span>Litecoin investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="xrp.php" class="nav-link">
                                  <i class="cc XRP-alt"></i>
                                  <span>Ripple investment</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="doge.php" class="nav-link">
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
                                  <h3>$500 - $1500</h3>
                                  <p class="mb-1 mt-3">3times return in 10Days </p>
                                  <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $1500</p>
                                  <a href="payment?btc=500" class="btn btn-success mt-3">Invest</a>
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
                                  <h3>$1000 - $3000</h3>
                                  <p class="mb-1 mt-3">3times return in 10Days </p>
                                  <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $3000</p>
                                    <a href="payment?btc=1000" class="btn btn-success mt-3">Invest</a>
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
                                  <h3>$2000 - $6000</h3>
                                  <p class="mb-1 mt-3">3times return in 10Days </p>
                                  <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $6000</p>
                                    <a href="payment?btc=2000" class="btn btn-success mt-3">Invest</a>
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
                                  <h3>$5000 - $15000</h3>
                                  <p class="mb-1 mt-3">3times return in 10Days </p>
                                  <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $15000</p>
                                    <a href="payment?btc=5000" class="btn btn-success mt-3">Invest</a>
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
                                  <h3>$10000 - $30000</h3>
                                  <p class="mb-1 mt-3">500% ROI + intial capital in 10Days </p>
                                  <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $30000</p>
                                  <a href="payment?btc=10000" class="btn btn-success mt-3">Invest</a>
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
                                  <h3>$20000 - $60000</h3>
                                  <p class="mb-1 mt-3">500% ROI + intial capital in 10Days </p>
                                  <p class="mb-1"> <span class="font-weight-bold">Total return: </span> $60000</p>
                                  <a href="payment?btc=20000" class="btn btn-success mt-3">Invest</a>
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
