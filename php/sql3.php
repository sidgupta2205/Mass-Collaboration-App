<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/stu_table1.css"  media="all">
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());

$s="select s.e_mail, s.first_name, s.Semester, s.Branch, it.sno, it.s1, it.s2, it.s3, it.s4, it.s5 FROM signup AS s, it WHERE s.Semester=it.sno ";
 $result = mysqli_query($con,$s);
 $row = mysqli_fetch_assoc($result);
 $r="select * FROM dsa WHERE email='".$row["e_mail"]."' ";
 $result = mysqli_query($con,$r);
 
 $row = mysqli_fetch_assoc($result);

echo "<table>";//2016-3-10
for($i=1;$i<4;$i++)
 {echo '<tr><th>'.$q.'</th>'.'<td>'.$row[$q].'</td></tr>';
 $q++;
 }
echo "</table>";
mysqli_close($con);
?>
</body>
</html>