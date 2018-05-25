<?php
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$j=0;
$id = $_GET['q'];
$sub  =$_GET['r'];
$e = "select * from attendance where att_user_id='".$id."' AND subject='".$sub."'";
$que = mysqli_query($conn,$e);
$result = mysqli_fetch_array($que);
date_default_timezone_set('Asia/Kolkata');
$today = getdate();
for($i=1;$i<=$today['mday'];$i++)
{
	if($result[$i]=='p')
	{
		$j++;
	}	
}
echo "the total attendance is ".$j;
?>