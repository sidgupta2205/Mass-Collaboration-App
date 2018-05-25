<?php
session_start();
$message="";
if(count($_POST)>0) {
	
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$uname=mysqli_real_escape_string($conn,$_POST["uname"]);
$pass=mysqli_real_escape_string($conn,$_POST["pass"]);
$result = mysqli_query($conn,"SELECT * FROM teachers WHERE t_e_mail='" . $uname . "' and t_password = '".$pass."'");
$row  = mysqli_fetch_array($result);
$pass = md5($pass);
if(is_array($row)) {
$_SESSION["college"] = $row['t_college'];
$_SESSION["user_name"] = $row['t_first_name'];
$_SESSION["id"] = $row['t_id'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_name"])) {
header("Location:tdashboard.php");
}
else{
	header("location:tsign.php");
	$message = "Invalid Username or Password!";
}
?>