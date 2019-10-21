<?php
session_start();
$con = mysqli_connect('localhost','root','','user');


$email = $_POST['email'];
$password = $_POST['password'];
$s = "SELECT * FROM userregistration WHERE email = '{$email}' AND password ='{$password}' LIMIT 1 ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result); 
if($num == 1){
	$row = mysqli_fetch_assoc($result);
    $_SESSION['first_name'] = $row['firstname'];
    echo '<script>alert("loging successfuly")</script>';
    header('location: index.php');
}
else{
    header('location:login.php');
}
?>

<!-- test -->