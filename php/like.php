<?php
$q = $_GET['q'];
$r = $_GET['r'];
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
if($q=="../icon/like.png")
{
	$que="INSERT INTO `signup`.`post_like` (`like_id`, `like_user_id`, `like_post_id`) VALUES (NULL, '1', '".$r."')";
	mysqli_query($con,$que);
	echo "../icon/like1.png";
}
else
{
	$que="DELETE FROM `post_like` WHERE like_user_id=1 AND like_post_id='".$r."'";
	mysqli_query($con,$que);
	echo "../icon/like.png";
}	
?>