<?php
session_start();
$exam = $_GET['exam'];
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$gg ="select marks, subject_id from marks where student_id='".$_SESSION['id']."' AND exam_id='".$exam."'";
$res = mysqli_query($conn,$gg);
while($arr = mysqli_fetch_array($res))
{
	$sub = "select sub_name from subjects where sub_id='".$arr['subject_id']."'";
	$ress = mysqli_query($conn,$sub);
	$arri = mysqli_fetch_array($ress);
	
echo '<tr><th>'.$arri['sub_name'].'</th><td>'.$arr['marks'].'</td></tr>';
}
?>