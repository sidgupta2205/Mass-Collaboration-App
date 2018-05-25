<html>
<head>
<meta name="viewport" content="width=device-width" content="initial-scale=1">
<title>
attendance
</title>
<link rel="stylesheet" type="text/css" href="stu_att.css"  media="all">
<link rel="stylesheet" type="text/css" href="sidebar.css"  media="all">
<script type="text/javascript" src="jquery-2.1.4.js"></script>
  <script src="mo.js"></script>
  <script src="jquery-2.1.4.js"></script>
  <script type="text/javascript" src="stuadden.js"></script>
</head>
<body>
<div class="container">
<div id="header">
<div id="leftnav">
<?php
include('sidebar.php');
?>
<a href="#" data-toggle=".container" >
 <button type="submit" id="bu1"><img src="AT1.png"  alt="Submit"></button>

        </a>
</div>
<div id="heading">
attendance
</div>
<div id="rightnav">
<button type="submit" id="bu2"><img src="icon.png"  alt="Submit"></button>


</div>
</div>
<div id="sec_head">
<div id="display">
Select Date <input type="date" name="select" id="datep">
</div>
<div id="right_head">
<button type="submit" id="bu3"><img src="icon1.png"  alt="Submit"></button>
</div>
<ul id="dropdown" class="dis1">
<li id="1">week</li>
<li id="2">month</li>
</ul>
<script>
  $('#bu2').click(function(){
	  $('#dropdown').toggleClass("dis1 dis");
  });
  $('#bu3').click(function(){
	  $('#dropdown1').toggleClass("dis1 dis2");
  });
  </script>
</div>
<div id="main_content">
<ul id="dropdown1" class="dis1">
<li>ADE</li>
<li>DSA</li>
<li>discreate</li>
<li>oopm</li>
<li>EEES</li>
</ul>
<div id="maintable">

</div>
</div>
<div id="footer">
<div id="date">
</div>
<div id="eligible">
<center>ELIGIBLITY</center>
</div>
</div>
</div>
</body>
</html>