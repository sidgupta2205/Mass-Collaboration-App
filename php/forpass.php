<?php
if(isset($_POST['submit']))
{
	include_once('connect.php');
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());


	$email = $_POST['email'];
	
	$s="select * from signup where e_mail='".$email."'";
	$result = mysqli_query($conn,$s);
 $count= mysqli_num_rows($result);
 if ($count>0)
 {
	 $random=rand(72891,92729);
	 $newpassword = $random;
	 $emailpassword = $newpassword;
	 $newpassword = md5($newpassword);
	 
	 mysql_query("update signup set password='".$newpassword."' WHERE e_mail='".$email."'");
	 
	 $subject="password changed" ;
	 $message = "your password has been changed on your request";
	 $from = "From:Aasinfotech@gmail.com";
	 
	 mail($email,$subject,$message,$from);
	 
	 echo "your password has been changed and mailed to you.";
	 
 }
 else
 {
	 echo "the entered email is wrong";
 } 
 
}	

?>