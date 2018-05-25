<?php
session_start();
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="../style/snotice.css" media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebaratt1.css"  media="all">
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
</head>
<body>
<div class="container">
<div id="header">
<div id="leftnav">
<?php
include('sidebar.php');
?>
<a href="#" data-toggle=".container" >
 <button type="submit" id="bu1"><img src="../icon/AT1.png"  alt="Submit"></button>

        </a>
</div>
<div id="main_heading">
NOTICE
</div>
</div>
<div id="main">
<?php include('snoticeajax.php');
?>
</div>
</div>
</body
</html>
