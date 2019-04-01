<?php
session_start();
$con = mysqli_connect('localhost','root','','user');

$fn = $_POST['fname'];
$ln = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$s = "SELECT * FROM userregistration WHERE email = '{$email}' LIMIT 1";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo '<script>alert("Username Already Taken")</script>';
    echo '<script>window.location="login.php"</script>';
}else{
    $reg = "INSERT INTO userregistration(firstname ,lastname ,email , password) values ('{$fn}','{$ln}','{$email}', '{$pass}')";
    mysqli_query($con, $reg);
    echo '<script>alert("Registration Successfully!")</script>';
    echo '<script>window.location="login.php"</script>';
}
?>