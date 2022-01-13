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
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>pending request</div>
            <div><?php echo $totalpending;?></div>
        </a>
    </div>


    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>total clients</div>
            <div><?php echo $totalclients;?></div>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>total affiliates</div>
            <div><?php echo $totalaffiliate;?></div>
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>Chat</h2>

    </div>
    <div class="box-content">

    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Name</th>
        <th>currency</th>
        <th>amount</th>
        <th>address</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    <?php while($fundeddetails=mysqli_fetch_assoc($checkmsg)){
        $amount = $fundeddetails['amount'];
        $status = $fundeddetails['currency'];
        $name = $fundeddetails['name'];
        $address = $fundeddetails['address'];
        $id = $fundeddetails['id'];
        $specicial = $fundeddetails['specialid'];

        $getrefer = "SELECT * FROM clients where specialid='$specicial'";
        $getreferresult = mysqli_query($db,$getrefer);
        $referdetail=mysqli_fetch_array($getreferresult,MYSQLI_ASSOC);
        $refer = $referdetail['refer'];
        if($getreferresult){
          $getreferper = "SELECT * FROM affiliates where referalcode='$refer'";
          $getreferresultper = mysqli_query($db,$getreferper);
          $referdetailper=mysqli_fetch_array($getreferresultper,MYSQLI_ASSOC);
          $referpern = $referdetailper['name'];
          $referpere = $referdetailper['email'];
          $referperg = $referdetailper['gender'];
          $referperc = $referdetailper['referalcode'];
        }
        ?>
    <tr>
        <td><?php echo $fundeddetails['name'];?></td>


        <td class="center">
            <span class="label-success label label-default"><?php echo $fundeddetails['currency']?></span>
        </td>
        <td><?php echo $fundeddetails['amount'];?></td>
        <td><?php echo $fundeddetails['address'];?></td>
        <td class="center">
        <a href="#" class="<?php echo "btn btn-info btn-setting".$id?>">info</a>
        <div class="modal fade" id="<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>affiliate's Info</h3>
                </div>
                <div class="modal-body">

<h3>
                            <?php echo $referpern;?></h3>
                            <p  style="font-size:15px">

                <br> <i class="glyphicon glyphicon-envelope"></i><b>Email:  </b> <?php echo $referpere;?>
                <br> <i class="glyphicon glyphicon-user"></i><b>Gender:  </b> <?php echo $referperg;?>
                <br> <i class="glyphicon glyphicon-map-marker"></i><b>referalcode:  </b> <?php echo $referperc;?>




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

<a class="btn btn-success"  href="admindash?identify=<?php echo $fundeddetails['id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                approve
            </a>
            <a class="btn btn-danger" href="admindash?identifyd=<?php echo $fundeddetails['id']; ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Decline
            </a>

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
