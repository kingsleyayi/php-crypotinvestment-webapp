<?php
session_start();
$_SESSION['meand'];
$id = $_SESSION['meand'];
if(!isset($id)){
    header('location: login.php');
}


?>
<?php
include('adminhandling.php');

?>
<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">add affiliate</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">

          <div class="well col-md-5 center login-box">

              <form class="form-horizontal" method="POST"  enctype="multipart/form-data">
                  <fieldset>
                      <div class="input-group input-group-lg">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                          <input type="text" class="form-control" placeholder="enter name" name="name" required>
                      </div>
                      <div class="clearfix"></div><br>

                      <div class="input-group input-group-lg">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                          <input type="email" class="form-control" placeholder="email" name="email" required>
                      </div>
                      <div class="clearfix"></div><br>
                      <div class="input-group input-group-lg">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                          <input type="text" class="form-control" placeholder="enter address" name="address" required>
                      </div>
                      <div class="clearfix"></div><br>
                      <div class="input-group input-group-lg">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                          <input type="text" class="form-control" placeholder="enter gender" name="gender" required>
                      </div>
                      <div class="clearfix"></div><br>
                      <div class="input-group input-group-lg">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                          <input type="text" class="form-control" placeholder="enter referal balance" name="referbalance" required>
                      </div>
                      <div class="clearfix"></div><br>

                      <div class="input-group input-group-lg">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                          <input type="password" class="form-control" placeholder="Password" name="password" required>
                      </div>
                      <div class="clearfix"></div>



                      <p class="center col-md-5">
                          <button type="submit" class="btn btn-primary" name="add">Add Affiliate</button>
                      </p>
                  </fieldset>
              </form>
          </div>
          <!--/span-->


    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <!--/span-->



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
