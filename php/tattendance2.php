<?php
session_start();
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$branch = $_GET['q'];
$r = "select att_user_id from attendance where subject='".$branch."' ";
$res = mysqli_query($conn,$r);
while($arr = mysqli_fetch_array($res))
{

	$s = "select first_name, last_name, ID from signup where ID='".$arr['att_user_id']."' ORDER BY first_name ";
	$ress = mysqli_query($conn,$s);
	$arri = mysqli_fetch_array($ress);
	
	echo '<div class="stunam" id='.$arri['ID'].'  data='.$arri['ID'].'>'.$arri['first_name'].'  '.$arri['last_name'].'</div>';
	
}

?>