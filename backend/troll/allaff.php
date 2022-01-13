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
if (isset($_GET['del'])) {
    $del= $db -> real_escape_string($_GET['del']);
    $getinfodel = "DELETE FROM affiliates WHERE specialid='$del'";
    $getinforesultdel = mysqli_query($db,$getinfodel);
    if ($getinforesultdel) {
      echo "<script>alert('Deleted affiliate');</script>";
    }
  }
?>
<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Affiliate</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i>Affiliate</h2>

    </div>
    <div class="box-content">

    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Name</th>
        <th>id</th>
        <th>referal code</th>
        <th>clients</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    <?php while($affiliatedetails=mysqli_fetch_assoc($affiliateresult)){
        $code =$affiliatedetails['referalcode'];
        $name = $affiliatedetails['name'];
        $specicial = $affiliatedetails['specialid'];

        $getrefer = "SELECT * FROM clients where refer='$code'";
        $getreferresult = mysqli_query($db,$getrefer);
        $referdetail=mysqli_num_rows($getreferresult);

        ?>
    <tr>
        <td><?php echo $name;?></td>

        <td><?php echo $specicial?></td>
        <td><?php echo $code?></td>
        <td><?php echo $referdetail?></td>

        <td class="center">

            <a class="btn btn-danger" href="allaff?del=<?php echo $specicial; ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                DELETE
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
