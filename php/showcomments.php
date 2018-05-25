<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$que = "select comment from post_comment where comment_post_id='".$q."' and comment_user_id=1 ORDER BY comment_id DESC";
$quest = mysqli_query($con,$que);
while($ques = mysqli_fetch_array($quest))
{
	echo '<div id="shocomments">'.$ques['comment'].'</div>';
}
?>