<?php
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$exam = $_GET['p'];
$mar = mysqli_real_escape_string($conn,$_GET['q']);
$us = $_GET['r'];
$sub = $_GET['s'];

$f = "select ex_id from exams where exam_name='".$exam."'";
$res = mysqli_query($conn,$f);
$exams = mysqli_fetch_array($res);
$n = "select * from marks where student_id='".$us."' AND exam_id='".$exams['ex_id']."' AND subject_id='".$sub."' ";
$rrr = mysqli_query($conn,$n);
 if(mysqli_num_rows($rrr)>0)
 {
$r = "update marks set marks='".$mar."' where student_id='".$us."' AND exam_id='".$exams['ex_id']."' AND subject_id='".$sub."'";
mysqli_query($conn,$r);
echo "updated";
 }
 else{
$p = "INSERT INTO `marks` (`marks_id`, `student_id`, `subject_id`, `exam_id`, `marks`) VALUES (NULL, '".$us."', '".$sub."', '".$exams['ex_id']."', '".$mar."')";
mysqli_query($conn,$p);
echo "inserted";
 }

?>