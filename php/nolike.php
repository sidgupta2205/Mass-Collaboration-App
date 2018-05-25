<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$nolike = "select like_id from post_like WHERE like_post_id='".$q."' ";
		$nolike1 = mysqli_query($con,$nolike);
		$nolike2 = mysqli_num_rows($nolike1);
echo $nolike2;
?>