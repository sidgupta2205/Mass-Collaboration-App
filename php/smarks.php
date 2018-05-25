<html>
<head>
<title>
</title>
<link rel="stylesheet" href="../style/smarks.css" media="all">
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
MARKS
</div>
</div>
<div id="kalipati">
<div id="select_exam">Select Exam
<select id="exam">
<option value="">select your exam</option>
<option value="1">MIDSEM-1</option>
<option value="2">MIDSEM-2</option>
<option value="3">MIDSEM-3</option>
<option value="4">FINALS</option>
</select>
</div>
</div>
<div id="main_content">
<table id="mar">
</table>
</div>
<script>
$(function(){
$('#exam').on('change',function(){
	showmarks($('#exam').val());
});
function showmarks(str){
    if (str == "") {
        document.getElementById("mar").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $('#mar').html(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET","smarksajax.php?exam="+str,true);
        xmlhttp.send();
    }
}
});
</script>
