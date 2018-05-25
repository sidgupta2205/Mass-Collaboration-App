<html>
<head>
<title>
GROUPS
</title>
<link rel="stylesheet" type="text/css" href="../style/tsignup.css"  media="all">
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  </head>
<body>
<?php
include('tmysignup.php');
?>
<div class="container">
<div id="kkk">
<div id="header">
<div id="heading">
SIGN UP
</div>
</div>
<div id="main_content">
<form action="" method="post">
<div class="form">
<em>FIRST NAME</em> <input type="text" name="fname" />
</div>
<div class="form">
<em>LAST NAME</em> <input type="text" name="lname" />
</div>
<div class="form">
<em>E-MAIL </em><input type="text" name="email" />
</div>
<div class="form">
<em>PASSWORD </em><input type="password" name="pass" />
</div>
<div class="form">
<em>MOBILE NO.</em> <input type="text" name="mob" />
</div>
<div class="form">
<em>SUBJECTS </em> <ul><h5>Choose subjects</h5>
<div id="dropdown" class="dis">
<li><input type="checkbox" name="action[]" value="2"/>cso,it</li>
<li ><input type="checkbox" name="action[]" value="3"/>ade,it</li>
<li><input type="checkbox" name="action[]" value="5"/>toc,it</li>
<li><input type="checkbox" name="action[]" value="4"/>dsa,it</li>
<li><input type="checkbox" name="action[]" value="6"/>eees,it</li>
</div>
</ul>
</div>
<div class="form">
<em>College </em><input type="text" name="clg" />
</div>
<div class="form"><em>GENDER</em>
<input type="radio" name="sex" value="male" checked>Male
<input type="radio" name="sex" value="female">Female
</div>
<div class="form">
<input type="submit" name="submit" value="submit" id="sub"/>
</div>
</form>
<div class="message">
<h3>
<?php
if(isset($msg))
{
	
	echo $msg;
}
?></h3>

</div>
</div>
</div>
</div>
<script>
$('ul').hover(function(){
	  $('#dropdown').toggleClass("dis1 dis");
  });
 </script> 