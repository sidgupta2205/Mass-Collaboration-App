<?php
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$sub = "select at.subject, su.sub_name from attendance AS at, subjects AS su where su.sub_id= at.subject AND at.att_user_id='".$_SESSION['id']."'";
$subn = mysqli_query($con,$sub); 
while($wer = mysqli_fetch_array($subn))
{
echo '<option value='.$wer['subject'].'>'.strtoupper($wer['sub_name']).'</option>';	
}
	
?>