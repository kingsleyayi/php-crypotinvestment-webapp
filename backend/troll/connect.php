<?php
$db = new mysqli('localhost','root','','manageloan');
$message = "Fill in the form correctly to get a loan";
if(isset($_POST["apply"])){
    function random_strings($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result),
                        0, $length_of_string);
    }
    $generate = random_strings(50);
    $generate = md5($generate);
    $qu = "SELECT * FROM user WHERE specialid = '$generate'";
    $row = mysqli_query($db,$qu);
    if(mysqli_num_rows($row) >0){
        $generate = random_strings(20);
        $generate = md5($generate);
        }



    $name =$db -> real_escape_string($_POST['fullname']);
    $email =$db -> real_escape_string($_POST['email']);
    $password = $db -> real_escape_string($_POST['password']);
    $phone = $db -> real_escape_string($_POST['phone']);
    $address = $db ->real_escape_string($_POST['address']);
    $dob = $db -> real_escape_string($_POST['dob']);
    $gender = $db -> real_escape_string($_POST['gender']);
    $employer = $db ->real_escape_string($_POST['employer']);
    $salary = $db ->real_escape_string($_POST['salary']);
    $accountnumber = $db ->real_escape_string($_POST['accountnumber']);
    $reason = $db ->real_escape_string($_POST['reason']);

    $password =md5($password);
    $specialid = $generate;
    $amount = $salary / 2;
    $date = date("m/d/y");


    $ql = "SELECT * FROM user WHERE name ='$name' || pass ='$password'";
    $result = mysqli_query($db,$ql);

    if(mysqli_num_rows($result) >0){
    $message= "User already exist";
    }
    else if(mysqli_num_rows($result) == 0){
    $target="img/".basename($_FILES['picture']['name']);
    $picture=$_FILES['picture']['name'];
    $query="INSERT INTO user(specialid, name, pass, email, phone, status, amount, date, salary, employer, dob, address, images, gender, accountnumber, reason)
    VALUES
    ('$specialid','$name','$password','$email','$phone','pending','$amount','$date','$salary','$employer','$dob','$address','$picture', '$gender', '$accountnumber', '$reason')";
    $re = mysqli_query($db,$query);
    if(move_uploaded_file($_FILES['picture']['tmp_name'],$target)){
        $msg="image upload successful";
        header("Location: login.php");
    }


    }
}
$show = "Please login with your Username and Password.";
if(isset($_POST["login"])){
    $mail = $db -> real_escape_string($_POST['email1']);
    $password = $db -> real_escape_string($_POST['password1']);
    $password = md5($password);
    $sql = "SELECT * FROM user WHERE email = '$mail' && pass ='$password'";
    $re = mysqli_query($db,$sql);
    $rs =mysqli_fetch_array($re, MYSQLI_ASSOC);
    $de = $rs['specialid'];
    if($de){
        session_start();
        $_SESSION['specialid'] = $de;
        header("Location: userdash.php");
    }else{
        $show = "Incorrect email or password";
    }

}


?>
