<?php
session_start();
$_SESSION['specialid'];
$id = $_SESSION['specialid'];
if(!isset($id)){
    header('location: login.php');
}
?>
<?php include('connect.php'); ?>
<?php include('userhandling.php');?>
     

<?php include('userheader.php'); ?>

    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">user profile</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>User Profile</h2>


    </div>
    <div class="box-content">
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
         
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="img/<?php echo $image;?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h2 >
                            <?php echo $name;?></h2>
                        <p  style="font-size:15px">
                           <br> <i class="glyphicon glyphicon-earphone"></i><b>Phone:  </b> <?php echo $phone;?>
                            
                            <br> <i class="glyphicon glyphicon-envelope"></i><b>Email:  </b> <?php echo $email;?>
                            <br> <i class="glyphicon glyphicon-calendar"></i><b>D.O.B:  </b> <?php echo $dob;?>
                            <br> <i class="glyphicon glyphicon-user"></i><b>Gender:  </b> <?php echo $gender;?>
                            <br> <i class="glyphicon glyphicon-map-marker"></i><b>Address:  </b> <?php echo $address;?>
                            <br> <i class="glyphicon glyphicon-tag"></i><b>Employer:  </b> <?php echo $employer;?>
                            <br> <i class="glyphicon glyphicon-usd"></i><b>Salary:  </b> <?php echo $salary;?>
                            <br> <i class="glyphicon glyphicon-credit-card"></i><b>Account number:  </b> <?php echo $accountnumber;?>
                            <br> <i class="glyphicon glyphicon-duplicate"></i><b>Reason for Loan:  </b> <?php echo $reason;?>
                            
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
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>