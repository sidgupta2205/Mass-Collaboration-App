<?php
session_start();
?>

<html>
<head>
<title>
mycol
</title>
<link rel="stylesheet" type="text/css" href="../style/index.css"  media="all">
<link rel="stylesheet" type="text/css" href="../style/button.css"  media="all">
</head>
<body style="background-color:#910606 ;">
<div class=cld>
<center><img src="../icon/dd.png">
<h1> MYCOL</h1></center><br>
<h1>Welcome
<?php
echo $_SESSION["user_name"];
?>
</h1>
</div>
<br>
<div class=ggg>
<h3>This application will help you with-
<ul>
<li>college attendance</li>
<li>connect with various colleges</li>
<li>Groups</li>
<li>Discussion Forums </li>
<li>semester marks and projects</li></ul></h3>
<div class=fixe>
    <a href="dashboard.php"><button type="button">Next</button></a>
</div></div>