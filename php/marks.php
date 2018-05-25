<html>
<head>
<title>
</title>
<link rel="stylesheet" href="../style/marks.css" media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebar2.css"  media="all">
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
</head>
<body>
<div class="container">
<div id="header">
<div id="but">
<div id="leftnav">
<?php
include('tsidebar.php');
?>
<a href="#" data-toggle=".container" >
 <button type="submit" id="bu1"><img src="../icon/side2.png"alt="Submit"/></button>
 </a>
</div>
<div id="main_heading">
marks
</div>
</div>
<div id="kalipati">
<div id="select_exam">Select Exam
<select id="exam" >

<option  value="midsem_1">MIDSEM-1</option>
<option value="midsem_2">MIDSEM-2</option>
<option  value="midsem_3">MIDSEM-3</option>
<option  value="finals">FINALS</option>
</select>
</div>
</div>
</div>
<div id="main_content">
<div id="side" data="">
</div>
<div id="mark">
<div id="enter">
<div id="current" data="">
</div>
<span id="buttons">
<input type="text" name="marks" id="marki" placeholder="marks"/>
<input type="submit" id="submbtn" value="SUBMIT"/>
</span>
</div>
</div>
</div>
</div>
</body>
<script>
$(document).ready(function(){
	
	$('#buttons').hide();
$('.sub').click(function(){
var exa = $('#exam').val();
var ff = $(this).attr('data');
$('#side').attr('data',ff);
displayname(ff,exa);
$('#buttons').show();
});
$('#submbtn').click(function(){
	var mark = $('#marki').val();
	var us_id = $('#current').attr('data');
	var sub_id =$('#side').attr('data');
	var exam = $('#exam').val();
	if(mark=='')
	{
		alert('please enter marks');
	}
	if(us_id=="null")
	{
		alert('please select student');
	}
	else{
	marks(exam,mark,us_id,sub_id);
	}
});

$('#side').on('click','.stunam',function(){
	$('#current').attr('data',$(this).attr('data'));
$('#current').text($(this).text());	
});
});
function displayname(str,ptr)
{
	if (str == "") {
        document.getElementById("side").innerHTML = "";
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
                document.getElementById("side").innerHTML = xmlhttp.responseText;
                firstname();
			}
        };
        xmlhttp.open("GET","marksname.php?q="+str+"&r="+ptr,true);
        xmlhttp.send();
}
}

function firstname(){
	$('#current').text($('#side').children().first().text());
var nf = $('#side').children().first().attr('data');
	$('#current').attr('data',nf);
	
}

function changename(str){
	if($(str).text()==='')
	{
	 $('#current').text('');
	$('#current').attr('data','null');
	}
	else{
	$('#current').text($(str).text());
var nf = $(str).attr('data');
	$('#current').attr('data',nf);	
}
}

function marks(ex,mar,us,sub)
{
	if (mar == "" || us== "") {
        alert('please enter marks or student');
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
				var idd = '#'+us;
                $('#side').find(idd).css('color','green');
				$('#marki').val('');
				changename($('#side').find(idd).next());
            }
        };
        xmlhttp.open("GET","markajax.php?p="+ex+"&q="+mar+"&r="+us+"&s="+sub,true);
        xmlhttp.send();
}
}
</script>
</html>