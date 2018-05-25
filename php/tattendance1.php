<?php
session_start();
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$branch = $_GET['q'];
$day = $_GET['r'];
$month = $_GET['s']; 
$r = "select att_user_id from attendance where subject='".$branch."' ";
$res = mysqli_query($conn,$r);
while($arr = mysqli_fetch_array($res))
{
	$f = "select `".$day."` from attendance where att_user_id='".$arr['att_user_id']."' AND subject = '".$branch."' ";
	$s = "select first_name, last_name, ID from signup where ID='".$arr['att_user_id']."' ORDER BY first_name ";
	$ress = mysqli_query($conn,$s);
	$arri = mysqli_fetch_array($ress);
	$pre = mysqli_query($conn,$f);
	$arrp = mysqli_fetch_array($pre);
	if($arrp[$day]=='p'){
		echo '<div class="stuname green" id='.$arri['ID'].' data='.$arri['ID'].' position="null">'.$arri['first_name'].'  '.$arri['last_name'].'</div>';
	}
	else if($arrp[$day]=='a'){
		echo '<div class="stuname red" id='.$arri['ID'].' data='.$arri['ID'].' position="null">'.$arri['first_name'].'  '.$arri['last_name'].'</div>';
	}
	else{
	echo '<div class="stuname" id='.$arri['ID'].' data='.$arri['ID'].' position="null">'.$arri['first_name'].'  '.$arri['last_name'].'</div>';
	}
	}

?>

