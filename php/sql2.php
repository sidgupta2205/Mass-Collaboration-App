<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/stu_table1.css"  media="all">
</head>
<body>

<?php
$q = $_GET['q'];
$h;
$f=1;
$n=1;
$t='ade';
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$s="select s.e_mail, s.first_name, s.Semester, s.Branch, it.sno, it.s1, it.s2, it.s3, it.s4, it.s5 FROM signup AS s,it WHERE s.Semester=it.sno ";
 $result = mysqli_query($con,$s);
 $row = mysqli_fetch_assoc($result);
 $r="select * FROM ".$t." AS ade WHERE ade.stu_email='".$row["e_mail"]."' ";
 $result = mysqli_query($con,$r);
 $row = mysqli_fetch_assoc($result);
if($q==1){
	$h=8;
	
	echo "<table>";
for($i=1;$i<$h;$i++)
 {echo '<tr><th>'.$i.'</th>'.'<td>'.$row[$i].'</td></tr>';
 }
echo "</table>";
}
else{
	echo "<table>";
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
			echo '<td>'.$row[$f].'</td>';
			$f++;
		}
		
	}
		echo "</tr>";
		
	}
	echo "</table>";
}

mysqli_close($con);
?>
</body>
</html>