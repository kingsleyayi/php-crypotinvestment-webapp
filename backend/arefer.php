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

            <div class="col-xl-9 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">referals</h4>
                    </div>
                    <div class="card-body">
                      <?php
                      $checki = "SELECT * FROM clients WHERE refer = '$refercode'";
                      $checkiresult =mysqli_query($db,$checki);
                      while($checkidetail=mysqli_fetch_array($checkiresult,MYSQLI_ASSOC)){


                       ?>
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3><?php  echo $checkidetail['name'];?></h3>
                                    <p class="mb-1 mt-3">email:<?php  echo $checkidetail['email'];?> </p>
                                    <p class="mb-1">Status: <span class="font-weight-bold"><?php  echo $checkidetail['plan'];?></span></p>
                                    <a href="activities?id=<?php echo $checkidetail['specialid'];?>" class="btn btn-success mt-3">Activities</a>
                                </div>
                            </div>
                        </div><br><br>

                        <?php

                      }
                     ?>
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
