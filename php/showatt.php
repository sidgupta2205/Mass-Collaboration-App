<?php
session_start();
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$sub = $_GET['sub'];
$date = $_GET['user'];
$mon = $_GET['mon'];
$dis = $_GET['dis'];
$f=1;
$n=1;

$s= "select * from attendance where att_user_id='".$_SESSION['id']."' AND subject='".$sub."'";
$sudb = mysqli_query($con,$s);
$pre = mysqli_fetch_array($sudb);
if($dis==1){
echo '<table>';
for($i=$date;$i<=($date+6);$i++)
{
	echo '<tr><th>'.$i.'</th>'.'<td>'.$pre[$i].'</td></tr>';
}
echo '</table>';
}

if($dis==2){
echo '<table>';
	for($i=1;$i<7;$i++)
	{
		
		
	echo "<tr>";
	if($i%2!=0){
		for($k=1;$k<11;$k++)
		{
			echo '<th>'.$n.'</th>';
			$n++;
		}
	}
	else{
		for($k=1;$k<11;$k++)
		{
			echo '<td>'.$pre[$f].'</td>';
			$f++;
		}
		
	}
		echo "</tr>";
		
	}
	echo "</table>";
		
		
	}	

?>