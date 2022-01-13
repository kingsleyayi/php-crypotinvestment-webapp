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
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="widget-card">
                                    <div class="widget-title">
                                        <h5>Withdrawable Balance</h5>

                                    </div>
                                    <div class="widget-info">
                                        <h3><?php echo $balance; ?></h3>
                                        <p>USD</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-xxl-12">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc BTC-alt"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Bitcoin

                                                        </h5>
                                                    </div>
                                                    <h4>USD <?php
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
                                                     echo $btc; ?>


                                                        <?php
                                                        if($btcdate != 0){
                                                          echo'<span class="badge badge-danger ml-2">'.$btcdate.'</span>';
                                                        }
                                                        ?>


                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc ETH-alt"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Ethereum

                                                        </h5>
                                                    </div>
                                                    <h4>USD <?php
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
                                                    echo $eth; ?>

                                                        <?php
                                                        if($ethdate != 0){
                                                      echo  '<span class="badge badge-danger ml-2">'.$ethdate.'</span>';
                                                        }
                                                        ?>

                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc LTC-alt"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Litecoin

                                                        </h5>
                                                    </div>
                                                    <h4>USD <?php
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

                                                     echo $ltc; ?>

                                                        <?php
                                                        if($ltcdate != 0){
                                                          echo '<span class="badge badge-danger ml-2">'.$ltcdate.'</span>';
                                                        }
                                                        ?>


                                                    </h4>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc XRP-alt"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Ripple

                                                        </h5>

                                                    </div>
                                                    <h4>USD <?php

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

                                                     echo $xrp; ?>


                                                        <?php
                                                        if($xrpdate != 0){
                                                          echo '<span class="badge badge-danger ml-2">'.$xrpdate.'</span>';
                                                        }
                                                        ?>


                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="widget-card">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="widget-stat">
                                                    <div class="coin-title">
                                                        <span><i class="cc DOGE-alt"></i></span>
                                                        <h5 class="d-inline-block ml-2 mb-3">Doge Coin

                                                        </h5>
                                                    </div>
                                                    <h4>USD <?php
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
                                                    echo $doge; ?>

                                                        <?php
                                                        if($dogedate != 0){
                                                          echo'<span class="badge badge-danger ml-2">'.$dogedate.'</span>';
                                                        }
                                                        ?>


                                                    </h4>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                          <div class="col-xl-6 col-lg-12 col-xxl-4">
                              <div class="card">
                                  <div class="card-header">
                                      <h4 class="card-title">Exchange</h4>
                                  </div>
                                  <div class="card-body">
                                      <div class="buy-sell-widget">
                                        <script src="https://widgets.coingecko.com/coingecko-coin-list-widget.js"></script>
                                        <coingecko-coin-list-widget  coin-ids="bitcoin,ethereum,dogecoin,ripple,litecoin" currency="usd" locale="en"></coingecko-coin-list-widget>
                                      </div>
                                  </div>
                              </div>
                          </div>
                            <div class="col-xl-6 col-lg-12 col-xxl-8" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Transaction </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="transaction-widget">
                                          <ul class="list-unstyled">
                                            <?php
                                            $tran= "SELECT * FROM transactions WHERE specialid = '$id'";
                                            $tranresult =mysqli_query($db,$tran);
                                            while($trandetail=mysqli_fetch_array($tranresult,MYSQLI_ASSOC)){
                                              if($trandetail['type'] == 'out'){
                                                $type = "la la-arrow-up";
                                                $col = "sold-thumb";
                                              }else {
                                                  $type = "la la-arrow-down";
                                                  $col = "buy-thumb";
                                              }


                                             ?>
                                              <li class="media">
                                                  <span class="<?php echo $col; ?>"><i class="<?php echo $type; ?>"></i></span>
                                                  <div class="media-body">
                                                      <p class="wallet-address text-dark"><?php echo$trandetail['wallet'] ;?>
                                                      </p>
                                                  </div>
                                                  <div class="text-right">
                                                      <h4><?php echo "$".$trandetail['amount']." worth of ".$trandetail['currency']; ?></h4>
                                                  </div>
                                              </li>
<?php
}
?>

                                          </ul>
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




    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/circle-progress/circle-progress-init.js"></script>


    <!--  flot-chart js -->
    <script src="vendor/apexchart/apexcharts.min.js"></script>
    <script src="vendor/apexchart/apexchart-init.js"></script>
    <script src="vendor/apexchart/apexchart2-init.js"></script>


    <script src="js/scripts.js"></script>
</body>


<!-- Mirrored from demo.themefisher.com/treemium/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 13:13:41 GMT -->
</html>
