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

            <div class="col-xl-9 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">profile</h4>
                    </div>
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="id_info">
                                    <h3><?php  echo $name;?></h3>
                                    <p class="mb-1 mt-3">email:<?php  echo $email;?> </p>
                                    <p class="mb-1">address: <span class="font-weight-bold"><?php  echo $address;?></span></p>
                                    <p class="mb-1">gender: <span class="font-weight-bold"><?php  echo $gender;?></span></p>

                                </div>
                            </div>
                        </div><br><br>

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
