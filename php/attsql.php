<?php
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$sel = "select e_mail, Branch, Semester FROM signup where ID=2";
$res = mysqli_query($con,$sel);
$fes = mysqli_fetch_array($res);
echo $fes['Branch'];
$oop = "select s1, s2, s3, s4, s5 FROM ".$fes['Branch']." where sno='".$fes['Semester']."'";
$res = mysqli_query($con,$oop);
$fesi = mysqli_fetch_array($res);
echo $fesi['s1'];
$oops = "select sub_id from subjects where sub_name='".$fesi[
's1']."' ";
$fesi=mysqli_query($con,$oops);
$sss = mysqli_fetch_array($fesi);
echo $sss['sub_id'];
?>
