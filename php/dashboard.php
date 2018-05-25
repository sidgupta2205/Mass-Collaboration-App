<html>
<head>
<title>
Dashboard
</title>
<head>
<link rel="stylesheet" type="text/css" href="../style/dashboard.css"  media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebar2.css"  media="all">
</head>
<body>
<div class="container">
<div class="sidebar">
<?php
include('sidebar.php');
?>
</div>
<div class="main-content">
        <div class="lgf"><h1>DASHBOARD</h1></div>
        
		<?php
		include('sidebutton.php');
		?>
		
        <div class="content">
            <div class="jjk">
<button type="submit" id="b1" onclick="window.location.href='stu_att.php'" ><div class=bb>
<h3>Attendance</h3></div>
</button>
<button type="submit" id="b2"onclick="window.location.href='smarks.php' "><div class=bb><h3><br><br>Marks</h3></div>
</button>
<button type="submit" id="b3" onclick="window.location.href='gwall.php'"><div class=bb><h3><br><br>Groups</h3></div>
</button>
<button type="submit" id="b4"onclick="window.location.href='snotice.php'"><div class=bb><h3><br><br>Notice</h3></div>
</button>

</div></div>
    </div>
</div>
</div>
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
</body>
</html>