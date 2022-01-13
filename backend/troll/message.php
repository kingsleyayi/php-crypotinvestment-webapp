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
                <a href="#">Pending Loan request</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Pending Loan request</h2>

    </div>
    <div class="box-content">

          <div id="thecha">
            <?php
            if (isset($_GET['Chat'])) {
            $speicalid = $db -> real_escape_string($_GET['Chat']);
            $sen="SELECT * FROM messages WHERE specialid='$speicalid'";
            $getid = mysqli_query($db, $sen);
            if(isset($_POST["messag"])){
              $re=mysqli_fetch_assoc($getid);
              $message = $db -> real_escape_string($_POST['messag']);
              $send = "admin";
              $spe = $re['specialid'];
              $sendquery = "INSERT INTO messages(sender, message, specialid) VALUES ('$send','$message','$spe')";
              $sendresult=mysqli_query($db, $sendquery);
              if($sendresult){
                  $sendyes="UPDATE user SET message='yes' WHERE specialid='$spe'";
                  $sendresult=mysqli_query($db, $sendyes);
              }
            }
             while($recieve=mysqli_fetch_assoc($getid)){
               if($recieve['sender']=="admin"){
                 echo "<div class='alert alert-info' style='width:70%;margin-left:30%'>".$recieve['message']."</div>
                 ";
               }else{
                echo "<div class='alert alert-success' style='width:70%;margin-right:30%'>".$recieve['message']."</div>
                ";
               }
             }
            }
            ?>

                </div>
                <form method="post">
                <div class="form-group" >
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter message" name = "messag" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <style>
#thecha{
  width:100%;
    height: 290px;
    overflow-x: hidden;
overflow-y: auto;

}
  </style>
  <script>
  var $thecha = $("#thecha");
  setInterval(function () {
    $thecha.load('<?php echo "message.php?Chat=".$speicalid." #thecha";?>');
  }, 1000)
  </script>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>
