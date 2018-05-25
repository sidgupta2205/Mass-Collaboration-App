<?php
session_start();
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$branch = $_GET['q'];
$exam = $_GET['r'];
$f = "select ex_id from exams where exam_name='".$exam."'";
$resii = mysqli_query($conn,$f);
$exams = mysqli_fetch_array($resii);
$r = "select att_user_id from attendance where subject='".$branch."' ";
$res = mysqli_query($conn,$r);
while($arr = mysqli_fetch_array($res))
{
$n = "select * from marks where student_id='".$arr['att_user_id']."' AND exam_id='".$exams['ex_id']."' AND subject_id='".$branch."' ";
$rrr = mysqli_query($conn,$n);

	 $s = "select first_name, last_name, ID from signup where ID='".$arr['att_user_id']."' ORDER BY first_name ";
	$ress = mysqli_query($conn,$s);
	$arri = mysqli_fetch_array($ress);
	if(mysqli_num_rows($rrr)>0)
	{
		echo '<div class="stunam green" id='.$arri['ID'].'  data='.$arri['ID'].'>'.$arri['first_name'].'  '.$arri['last_name'].'</div>';
	}
	else{
	echo '<div class="stunam" id='.$arri['ID'].'  data='.$arri['ID'].'>'.$arri['first_name'].'  '.$arri['last_name'].'</div>';
	}
}

?>