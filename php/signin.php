<?php
session_start();
$message="";
if(count($_POST)>0){
include('connect1.php');
$uname=mysqli_real_escape_string($conn,$_POST["uname"]);
$pass=mysqli_real_escape_string($conn,$_POST["pass"]);
$pass=md5($pass);
$result = mysqli_query($conn,"SELECT * FROM signup WHERE e_mail='" . $uname . "' and password = '". $pass ."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["e_mail"] = $row['e_mail'];
$_SESSION["user_name"] = $row['first_name'];
$_SESSION["id"] = $row['ID'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_name"])) {
header("Location:index.php");
}
else{
header("location:sign.php");}
?>