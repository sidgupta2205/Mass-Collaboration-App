<?php
$q = $_GET['q'];
$r = $_GET['r'];
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());

$que="INSERT INTO `post_comment` (`comment_id`, `comment_user_id`, `comment_post_id`, `comment`) VALUES (NULL, '1', '".$r."','".$q."')";
mysqli_query($con,$que);
echo $q;
?>