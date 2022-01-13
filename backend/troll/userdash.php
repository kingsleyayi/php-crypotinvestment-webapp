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
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>



<div class="row" >
    <div class="box col-md-4">
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Tabs</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">Present Loan</a></li>
                    <li><a href="#custom">Request Loan</a></li>


                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">

                        <h3>
                        <small><?php echo $eli." Amount";?></small></h3>

                       <form method = "POST">
                        <b style="color:#3986AC;font-size:30px;width:20%">₦</b>
                        <output name="ageOutputName" id="ageOutputId" style="color:#3986AC;font-size:30px;width:70%;margin-top:-51px;margin-left:25px;"><?php echo $amount;?></output>
                        <?php
                        if($status == "approved"){
                            echo "<input type='range' name='ageInputName' id='ageInputId' value=".$amount." min='1' max=".$amount." oninput='ageOutputId.value = ageInputId.value'>
                            <h3>
                            <small>Borrower's Name: ".$name."</small>
                            <small>Payment to account Number: ".$accountnumber."</small><br>
                            <small>28 day Loan Payment Due on ".$finaldate."</small>

                        <br><button type='submit' class='btn btn-primary' name='fund'>Fund</button>

                            ";
                        }elseif($status == "pending"){
                            echo "<h3>
                            <small>Your Loan is being processed and awaiting approval</small></h3>";
                        } elseif($status == "funded"){
                            echo " <br><div class='alert alert-success'>
                            Your loan has been sent to<br> Account Number:".$accountnumber."<br>Repay your loan before ".$repay."</div>";
                        }
                        elseif($status == "paid"){
                          echo " <br><div class='alert alert-success'>
                          Your Last Loan has been repaid you are eligible for another Loan</div>";
                      }

                        elseif($status == "rejected"){
                          echo" <div class='alert alert-danger'>
                          <strong>Status:rejected</strong> Your are not qualified for a loan at the moment, Your Loan has been rejected
                           </div>";
                       ;
                      }
                        ?>

                        </form>




                    </div>
                    <div class="tab-pane" id="custom">
                        <h3>Request Loan
                        </h3>
                        <?php
                        if($status == "paid"){?>
                        <form role="form" method="POST"  enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="exampleInputText1">Reason for Loan</label>
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter reason for requesting another loan" name = "reason" required>
                        <br><button type='submit' class='btn btn-primary' name='request'>Request</button>
                        </form>
                        <?php }else{?>
                         <form role="form" method="POST"  enctype="multipart/form-data">
                        <div class="form-group">

                        <input type="hidden" class="form-control" id="exampleInputText1" placeholder="Enter reason for requesting another loan"  required>

                        </form>
                         <br><div class="alert alert-danger">
                           You are not elegible to request for a loan
                           </div>
                        <?php };?>



                    </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/span-->
    <div class="box col-md-4">
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list-alt"></i> Live Chat</h2>


            </div>
            <div class="box-content">
            <div id="thechat">
            <?php

            $recievequery="SELECT * FROM messages WHERE specialid='$id'";
            $checkrecieve =mysqli_query($db,$recievequery);
            ?>
            <?php
             while($recievedetails=mysqli_fetch_assoc($checkrecieve)){
               if($recievedetails['sender']=="admin"){
                 echo "<div class='alert alert-success' style='width:70%;margin-right:30%'>".$recievedetails['message']."</div>
                 ";
               }else{
                 echo "<div class='alert alert-info' style='width:70%;margin-left:30%'>".$recievedetails['message']."</div>
";
               }
             }
            ?>

                </div>
                <form method="post">
                <div class="form-group" >
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter message" name = "message" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <style>
#thechat{
  width:100%;
    height: 290px;
    overflow-x: hidden;
overflow-y: auto;

}
  </style>
  <script>
  var $thechat = $("#thechat");
  setInterval(function () {
    $thechat.load("userdash.php #thechat");
  }, 5000)
  </script>

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Repay Loan</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
<?php
        if($status == "approved"){
            echo"  <div class='danger1' style='  background-color: lightgreen;border-left: 6px solid green;'>
            <p><strong>Status:Approved</strong>Loan approved accept loan amount</p>";
        }elseif($status == "pending"){
            echo"  <div class='danger1' style='  background-color: lightgreen;border-left: 6px solid green;'>
            <p><strong>Status:Pending</strong> your application is being reviewed</p>";
        }
        elseif($status == "paid"){
          echo"  <div class='danger1' style='  background-color: lightgreen;border-left: 6px solid green;'>
          <p><strong>Status:Paid</strong> Your last loan has been paid you are eligible to request for another Loan</p>";
      }
      elseif($status == "rejected"){
        echo" <div class='alert alert-danger'>
        <strong>Status:rejected</strong> Your are not qualified for a loan at the moment, Your Loan has been rejected
         </div>";
    }
?>
<?php
if($status == "funded"){ ?>
<div class="container" style="margin-left:0%; width:100%;">
    <div class='row' >
        <div class='col-md-4'></div>
        <div class='col-md-4' style="margin-left:0%; width:100%;">
        <?php error_reporting(0);echo $errors;?>
<form method="POST">
  <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text' name="cardname"  required>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='number' name="cardnumber" required>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='number' required  name="cardcvc">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='number'   required name="cardexpm">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='number'  required name="cardexpy">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'><?php echo $amount;?></span>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit' name="pay">Pay »</button>
              </div>
            </div>

          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
<?php } ?>

            </div>
            </div>
        </div>
    </div>
    <!--/span-->


</div><!--/row-->




<?php require('footer.php'); ?>
<script>
