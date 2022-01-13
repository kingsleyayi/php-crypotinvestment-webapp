<?php
session_start();
$_SESSION['admin'];
$id = $_SESSION['admin'];
if(!isset($id)){
    header('location: adminlogin.php');
}


?>
<?php require('adminhandling.php'); ?>
<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Funded Loan request</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Funded Loan request</h2>

    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>fullname</th>
        <th>Amount funded</th>
        <th>Repayment Date</th>
        <th>Account number</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php while($fundeddetails=mysqli_fetch_assoc($checkfunded)){
        $amount = $fundeddetails['amount'];
        $status = $fundeddetails['status'];
        $accountnumber= $fundeddetails['accountnumber'];
        $name = $fundeddetails['name'];
        $repay = $fundeddetails['repaydate'];
        $salary = $fundeddetails['salary'];
        $dob = $fundeddetails['dob'];
        $employer = $fundeddetails['employer'];
        $salary = $fundeddetails['salary'];
        $address = $fundeddetails['address'];
        $reason = $fundeddetails['reason'];
        $phone = $fundeddetails['phone'];
        $email = $fundeddetails['email'];
        $gender =$fundeddetails['gender'];
        $image = $fundeddetails['images'];
        $id = $fundeddetails['id'];
        $specicial = $fundeddetails['specialid'];
        ?>
    <tr>
        <td><?php echo $fundeddetails['name'];?></td>
        <td class="center"><?php echo "₦".$amount;?></td>
        <td class="center"><?php echo $repay;?></td>
        <td class="center"><?php echo $accountnumber;?></td>
        <td class="center">
            <span class="label-success label label-default"><?php echo $fundeddetails['status'];?></span>
        </td>
        <td class="center">
        <a href="#" class="<?php echo "btn btn-info btn-setting".$id?>">info</a>
        <div class="modal fade" id="<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Borrower's Info</h3>
                </div>
                <div class="modal-body">
                
                        
                        
                        <div class="circular--portrait">
  <img src="img/<?php echo $image;?>" />
</div>
<h3>
                            <?php echo $name;?></h3>
                            <p  style="font-size:15px">
                <br> <i class="glyphicon glyphicon-earphone"></i><b>Phone:  </b> <?php echo $phone;?>
                                            
                <br> <i class="glyphicon glyphicon-envelope"></i><b>Email:  </b> <?php echo $email;?>
                <br> <i class="glyphicon glyphicon-calendar"></i><b>D.O.B:  </b> <?php echo $dob;?>
                <br> <i class="glyphicon glyphicon-user"></i><b>Gender:  </b> <?php echo $gender;?>
                <br> <i class="glyphicon glyphicon-map-marker"></i><b>Address:  </b> <?php echo $address;?>
                <br> <i class="glyphicon glyphicon-tag"></i><b>Employer:  </b> <?php echo $employer;?>
                <br> <i class="glyphicon glyphicon-usd"></i><b>Salary:  </b> <?php echo $salary;?>
                <br> <i class="glyphicon glyphicon-credit-card"></i><b>Account number:  </b> <?php echo $accountnumber;?>
                <br> <i class="glyphicon glyphicon-file"></i><b>Reason for Loan:  </b> <?php echo $reason;?></p>
               
             

                </div>

            </div>
        </div>
    </div>
                        
<script>
    $('<?php echo ".btn-setting".$id;?>').click(function (e) {
        e.preventDefault();
        $('<?php echo "#".$id;?>').modal('show');
    });
</script>



        </td>
    </tr>
    <?php };?>
  
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->


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