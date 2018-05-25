<?php
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
if(isset($_POST['submit']))
{
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	$mob = mysqli_real_escape_string($conn,$_POST['mob']);
	$gender = $_POST['sex'];
	$clg = mysqli_real_escape_string($conn,$_POST['clg']);
$pass = md5($pass);
	$s="select * from teachers where t_e_mail='".$email."'";
 $result = mysqli_query($conn,$s);
 $count= mysqli_num_rows($result);
 
 
if(empty($fname)){
$msg="please enter first name";
}
else if(empty($lname)){
$msg= "please enter last name";}
else if(empty($email)){
$msg="please enter Email";}
else if($count>0)
{
	$msg="email already exists";
}
else if(!isset($_POST['action']))
{
	$msg = "please choose any subject";
}
else if(empty($clg)){
	$msg="please enter your college name";
}
else if(empty($pass)){
	$msg="please enter a password";
}
else if(empty($mob)){
$msg="please enter your mobile no.";}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$msg="please enter CORRECT EMAIL";
}
else if(!preg_match("^[0-9]{10}^","$mob"))
	{
		$msg="please enter correct mobile number";
	}
else if(strlen($pass)<8){
	$msg="password must be greater then 8";
}

else{ 
mysqli_query($conn,"INSERT INTO `teachers` (`t_first_name`, `t_last_name`, `t_e_mail`, `t_password`, `t_mob`, `t_id`, `t_gen`) VALUES ('".$fname."', '".$lname."', '".$email."', '".$pass."', '".$mob."', NULL, '".$gender."')");
$r="select t_id from teachers where t_e_mail='".$email."'";
$res = mysqli_query($conn,$r);
$teid = mysqli_fetch_array($res);
foreach($_POST['action'] as $check)
{
	mysqli_query($conn,"INSERT INTO `signup`.`teac_sub` (`te_id`, `subj_id`, `teac_sub_id`) VALUES ('".$teid['t_id']."', '".$check."', NULL)");
}
header("location:tsign.php");
}

}
?>