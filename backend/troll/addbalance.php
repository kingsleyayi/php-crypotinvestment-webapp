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
          <th>email</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    <?php while($clientdetails=mysqli_fetch_assoc($clientresult)){

        $name = $clientdetails['name'];
          $email = $clientdetails['email'];
        $specicial =$clientdetails['specialid'];

        ?>
    <tr>
        <td><?php echo $name;?></td>
        <td><?php echo $email;?></td>


        <td class="center">

            <a class="btn btn-info btn-setting" href="updatebalance?id=<?php echo $specicial; ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Update balance
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
