
<?php
include('mysignup.php');
?>
<html>
<head>
<title>
Sign up
</title>
<link rel="stylesheet" type="text/css" href="../style/color.css"  media="all">
</head>
<body style="background-color:#910606  ;">
<div class=cldp>
<center><h1> REGISTER NOW </h1></center><br><br>
</div>
<center><div class=gggp>
<div>
<h3>
<?php
if(isset($msg))
{
	
	echo $msg;
}
?></h3>
<table border="0" cellpadding="8">

<form action="" method="post">

<tr>
<td>First name</td><td><input class=dof type="text" name="fname" ></td></tr>
<tr>
<td>Last name</td>  <td><input class=dof type="text" name="lname" ></td></tr>
<tr>
<td>E-mail</td><td><input class=dof type="text" name="email" ></td></tr>
<tr>
<td>Password</td><td><input class=dof type="password" name="pass"></td></tr>
<tr>
<td>Mobile</td><td><input class=dof type="text" name="mob"></td></tr>
<tr>
<td>Semester</td><td>
<select class=dof name=sem>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</td></tr>
<tr>
<td>Branch</td><td><select class=dof name=bra>
<option value="Computer science">Computer science</option>
<option value="it">Information technology</option>
<option value="Electronics and communication">Electronics and communication</option>
<option value="Petrochemicals">Petrochemicals</option>
<option value="Mechanical">Mechanical</option>
<option value="Civil">Civil</option>
<option value="Automobile">Automobile</option>
<option value="Biotechnology">Biotechnology</option>
<option value="Electrical and electronics">Electrical and electronics</option>
</select>
</tr>
<tr>
<td>College</td><td><input class=dof type="text" name="clg"></td></tr>
<tr>
<td>Birthdate</td>  <td><input class=dof type="date" name="dob"></td></tr>
<tr>
<td>Gender</td><td><input type="radio" name="sex" value="male" checked>Male
<input type="radio" name="sex" value="female">Female
</td></tr>
<tr>
<td colspan="2"><center>
<input class=dob type="submit" name="submit" value="Sign up"></center></td></tr></table></h5>
</center></div>
<center><h3 style="color:blue">
</h3></center>
</div>
</body>
