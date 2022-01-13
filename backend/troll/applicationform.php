<?php require('aheader.php'); ?>
<?php include('connect.php'); ?>

<div class="alert alert-info" style="margin-left:20%;width:60%;">
            <?php error_reporting(0);echo $message;?>
            </div>
<div class="row" style="margin-left:20%;margin-right:20%;">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Application Form</h2>

            </div>
            <div class="box-content">
                <form role="form" method="POST"  enctype="multipart/form-data" ">
                   <div class="form-group">
                        <label for="exampleInputText1">Fullname</label>
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter fullname" name = "fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Phone number</label>
                        <input type="number" class="form-control" id="exampleInputText1" placeholder="Enter phone number" name = "phone" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name = "email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Address</label>
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter your address" name = "address" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Date of Birth</label>
                        <input type="date" class="form-control" id="exampleInputText1" placeholder="Enter email" name = "dob" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Gender</label><br>
                        Male<input type="radio"  name = "gender" value="Male" >
                        Female<input type="radio"  name = "gender" value="Female" >
                        Others<input type="radio" name = "gender" value="Others" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Employer's name</label>
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter employers" name = "employer" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Annual Salary</label>
                        <input type="number" class="form-control" id="exampleInputText1" placeholder="Enter annual salary" name = "salary" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Account number</label>
                        <input type="number" class="form-control" id="exampleInputText1" placeholder="Enter account number" name = "accountnumber" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Reason for Loan</label>
                        <input type="TEXT" class="form-control" id="exampleInputText1" placeholder="Enter reason for applying for a loan" name = "reason" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload picture</label>
                        <input type="file"  name="picture" required = "file">

                       
                    </div>
                    <button type="submit" class="btn btn-default" name="apply">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->




<?php require('footer.php'); ?>

