<?php
session_start();
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$q = $_GET['q'];
if($q==0)
{
	$ee = "DELETE from following where g_id='".$_SESSION['gro_id']."' AND us_id='".$_SESSION['id']."' ";
	mysqli_query($con,$ee);
	echo "follow";
}
else
{
	$rrrr = "INSERT INTO `signup`.`following` (`follow_id`, `g_id`, `us_id`) VALUES (NULL, '".$_SESSION['gro_id']."', '".$_SESSION['id']."')";
	mysqli_query($con,$rrrr);
	echo "unfollow";
}	
?>