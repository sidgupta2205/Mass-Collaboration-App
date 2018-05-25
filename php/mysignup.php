<?php
include_once('connect.php');
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
if(isset($_POST['submit']))
{
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	$mob = mysqli_real_escape_string($conn,$_POST['mob']);
	$gender = $_POST['sex'];
	$dob = $_POST['dob'];
	$sem = $_POST['sem'];
	$clg = mysqli_real_escape_string($conn,$_POST['clg']);
	$bra = mysqli_real_escape_string($conn,$_POST['bra']);
	$pass=md5($pass);
	$s="select * from signup where e_mail='".$email."'";
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
else if(empty($pass)){
	$msg="please enter a password";
}
else if(empty($mob)){
$msg="please enter your mobile no.";}
else if(empty($clg)){
	$msg="please enter your college name";
	}

else if(empty($dob)){
$msg="please enter your date of birth";}
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
mysql_query("insert into signup(first_name,last_name,e_mail,mobile_num,password,Semester,Branch,College,Birth_date,gender) VALUES ('$fname','$lname','$email','$mob','$pass','$sem','$bra','$clg','$dob','$gender')");
$ggg = "select ID from signup where e_mail='".$email."'";
$fff = mysqli_query($conn,$ggg);
$try = mysqli_fetch_array($fff);
$oop = "select * FROM ".$bra." where sno='".$sem."'";
$res = mysqli_query($conn,$oop);
$fesi = mysqli_fetch_array($res);

$oops = "select sub_id from subjects where sub_name='".$fesi['1']."' ";
$fesp=mysqli_query($conn,$oops);
$sss = mysqli_fetch_array($fesp);
$kkk="INSERT INTO `signup`.`attendance` (`attendance_id`, `att_user_id`, `subject`, `month`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES (NULL, '".$try['ID']."', '".$sss['sub_id']."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
mysqli_query($conn,$kkk);

$oops = "select sub_id from subjects where sub_name='".$fesi['2']."' ";
$fesp=mysqli_query($conn,$oops);
$sss = mysqli_fetch_array($fesp);
$kkk="INSERT INTO `signup`.`attendance` (`attendance_id`, `att_user_id`, `subject`, `month`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES (NULL, '".$try['ID']."', '".$sss['sub_id']."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
mysqli_query($conn,$kkk);

$oops = "select sub_id from subjects where sub_name='".$fesi['3']."' ";
$fesp=mysqli_query($conn,$oops);
$sss = mysqli_fetch_array($fesp);
$kkk="INSERT INTO `signup`.`attendance` (`attendance_id`, `att_user_id`, `subject`, `month`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES (NULL, '".$try['ID']."', '".$sss['sub_id']."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
mysqli_query($conn,$kkk);

$oops = "select sub_id from subjects where sub_name='".$fesi['4']."' ";
$fesp=mysqli_query($conn,$oops);
$sss = mysqli_fetch_array($fesp);
$kkk="INSERT INTO `signup`.`attendance` (`attendance_id`, `att_user_id`, `subject`, `month`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES (NULL, '".$try['ID']."', '".$sss['sub_id']."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
mysqli_query($conn,$kkk);

$oops = "select sub_id from subjects where sub_name='".$fesi['5']."' ";
$fesp=mysqli_query($conn,$oops);
$sss = mysqli_fetch_array($fesp);
$kkk="INSERT INTO `signup`.`attendance` (`attendance_id`, `att_user_id`, `subject`, `month`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES (NULL, '".$try['ID']."', '".$sss['sub_id']."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
mysqli_query($conn,$kkk);

$gtyg = "select gro_id from groups where name='".$clg."' or gro_branch='".$bra."' AND gro_sem='".$sem."'";
$fesep=mysqli_query($conn,$gtyg);
while($sssee = mysqli_fetch_array($fesep))
{
	$rrrr = "INSERT INTO `signup`.`following` (`follow_id`, `g_id`, `us_id`) VALUES (NULL, '".$sssee['gro_id']."', '".$try['ID']."')";
mysqli_query($conn,$rrrr);
	
}




header("location:sign.php");
}
}
?>