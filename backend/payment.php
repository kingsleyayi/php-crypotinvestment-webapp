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
<?php include('handlepayment.php'); ?>
<?php include('top.php'); ?>

<div class="content-body">
    <div class="container">
        <div class="row">

            <div class="col-xl-9 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pay with </h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-4">
                                <div class="id_card">
                                    <img src="images/<?php echo "$scancode"; ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="phone_verify">
                                    <h4 class="card-title mb-3">Send <?php echo $currency; ?> to</h4>
                                    <form method="post" >
                                        <div class="form-row align-items-center"">
                                            <div class="form-group col-xl-6"">
                                                <input value="<?php echo $sendto; ?>" readonly type="text" class="form-control">
                                                <br>  <h4 class="card-title mb-3">use converter to know <?php echo "$".$amount;?> worth of <?php echo $currency;?> to pay</h4>
                                              <?php
                                              echo $converter;
                                               ?>

                                                <br>  <h4 class="card-title mb-3">Your address</h4>
                                                <input type="text" name ="address" class="form-control">
                                                <button class="btn btn-success mt-4" name="paid" type="submit">Confirm payment</button>
                                            </div>
                                        </div>
                                    </form>
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
