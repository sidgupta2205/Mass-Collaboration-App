<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width" content="initial-scale=1">
<title>
attendance
</title>
<link rel="stylesheet" type="text/css" href="../style/stu_table1.css"  media="all">
<link rel="stylesheet" type="text/css" href="../style/stu_att.css"  media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebaratt1.css"  media="all">
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
  <script src="../script/jquery-2.1.4.js"></script>
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
<div id="heading">
Attendance
</div>
<div id="rightnav">
<select id="displ">
<option value="1">week</option>
<option value="2">month</option>
</select>
</div>
</div>
<div id="sec_head">
<div id="display">
Select Date <input type="date" name="select" id="datep" value="<?php echo date('Y-m-d');?>"/>
<select id="sub">
<?php
include('subjectstu.php');
?>
</select>

</div>

</div>
<div id="main_content">
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
<script>
$('#datep').on('change',function(){
	var das = $('#datep').val();
	var press  = new Date(das);
	var days = press.getDate();
	var months = press.getMonth()+1;
	
showatt($('#sub').val(),days,months,$('#displ').val());	
});

$('#displ').on('change',function(){
	var das = $('#datep').val();
	var press  = new Date(das);
	var days = press.getDate();
	var months = press.getMonth()+1;
	
showatt($('#sub').val(),days,months,$('#displ').val());	
});

$('#sub').on('change',function(){
	var das = $('#datep').val();
	var press  = new Date(das);
	var days = press.getDate();
	var months = press.getMonth()+1;
	
showatt($('#sub').val(),days,months,$('#displ').val());	
});

function showatt(str,ptr,mon,dis){
if (str=="null") {
        return;
    }
	else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            
			$('#maintable').html(xmlhttp.responseText);
			
            }
        };
        xmlhttp.open("GET","showatt.php?sub="+str+"&user="+ptr+"&mon="+mon+"&dis="+dis,true);
        xmlhttp.send();
    }	
	
}
</script>
</html>