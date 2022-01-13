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
if (isset($_GET['id'])) {
    $speicalidt = $db -> real_escape_string($_GET['id']);
}
 ?>
<div class="content-body">
    <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-xxl-8" >
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Transaction </h4>
                  </div>
                  <div class="card-body">
                      <div class="transaction-widget">
                          <ul class="list-unstyled">
                            <?php
                            $tran= "SELECT * FROM transactions WHERE specialid = '$speicalidt'";
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



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>



</body>


<!-- Mirrored from demo.themefisher.com/treemium/settings-security.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 13:14:30 GMT -->
</html>
