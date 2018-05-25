<html>
<head>
<title>
GROUPS
</title>
<link rel="stylesheet" href="../style/tattendance.css" media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebar2.css"  media="all">


<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
  
</head>
<body>
<div class="container">
<div id="kkk">
<div id="header">
<div id="but">
<div id="leftnav">
<?php
include('tsidebar.php');
?>
<a href="#" data-toggle=".container" >
 <button type="submit" id="bu1"><img src="../icon/side2.png" alt="Submit"></button>
 </a>
</div>
<div id="heading">
Attendance</div></div>
<div id="datea">select date &nbsp;<input id="date" class=aa type="date" name="date" value="<?php echo date('Y-m-d');?>"/></div>

</div>
<div id="kaliPati">
<div class="bugwall" id="bupost">
TODAY
</div>
<div class="bugwall" id="budiscus">
TOTAL
</div>
</div>
<div id="maincontent">
<div id="post" class="dis">
<script>
$(document).ready(function(){
	$('#buttons').hide();
	$(".sub").click(function(){
	var das = $('#date').val();
	var press  = new Date(das);
	var days = press.getDate();
	var months = press.getMonth()+1;
	
var ff = $(this).attr('data');
	$('#now').attr('data',ff);
	$('#buttons').show();
displayname($(this).attr('data'),days,months);		
});
});
$(document).on('click','.bu3',function(){
	var result = $(this).val(); 
	var sub = $('#now').attr('data');
	var user = $('#name').attr('data');
	var da = $('#date').val();
	var pres  = new Date(da);
	var day = pres.getDate();
	var month = pres.getMonth()+1;
	
present(sub,user,day,month,result,this);

});


function present(subj,userj,dayj,monthj,resultj,hhh){
if (userj=="null") {
	alert('no names selected');
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
                var idd = '#'+userj;
				var response = xmlhttp.responseText;
				if(response==='p'){
				$('#now').find(idd).css('color','green');
				}
				else{
					$('#now').find(idd).css('color','red');
				}
				changename($('#now').find(idd).next());
            }
        };
        xmlhttp.open("GET","present.php?sub="+subj+"&user="+userj+"&day="+dayj+"&month="+monthj+"&result="+resultj,true);
        xmlhttp.send();
    }
	
}
function displayname(str,day,month){
    if (str == "") {
        document.getElementById("now").innerHTML = "";
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
                document.getElementById("now").innerHTML = xmlhttp.responseText;
				firstname();
            }
        };
        xmlhttp.open("GET","tattendance1.php?q="+str+"&r="+day+"&s="+month,true);
        xmlhttp.send();
    }
}

function firstname(){
	$('#name').text($('#now').children().first().text());
var nf = $('#now').children().first().attr('data');
	$('#name').attr('data',nf);
	
}

function changename(str){
	if($(str).text()==='')
	{
	 $('#name').text('');
	$('#name').attr('data','null');
	}
	else{
	$('#name').text($(str).text());
var nf = $(str).attr('data');
	$('#name').attr('data',nf);	
}
}
</script>
<div id="now" data="">
</div>
<div id="stname"><div id="show">
<div id="name" data=""></div>
<span  id="buttons">
<button type="submit" id="p" value="p" class="bu3"><img src="../icon/pbutton.png"  alt="Submit"/></button>
<button type="submit" id="a" value="a" class="bu3"><img src="../icon/abutton.png"  alt="Submit"/></button>
</span>
</div>
</div>
</div>
<div id="discuss" class="dis1">
<div id="subd">
<?php
include('total.php');
?>
</div>
<div id="stud" data="">
</div>
<div id="dshow">
</div>
</div>
</div>
</div>
</div>
</body>
<script>
$('#bupost').click(function(){
	$('#discuss').removeClass("dis");
	$('#discuss').addClass("dis1");
	$('#post').removeClass("dis1");
	$('#post').addClass("dis");	
	
});
$('#budiscus').click(function(){
	$('#post').removeClass("dis");
	$('#post').addClass("dis1");
	$('#discuss').removeClass("dis1");
	$('#discuss').addClass("dis");
});
$(document).ready(function(){
$('#now').on('click','.stuname',function(){
	$('#name').text($(this).text());
var nn = $(this).attr('data');
	$('#name').attr('data',nn);
	});
});
</script>
<script>
$('.subf').click(function(){
var ff = $(this).attr('data');
$('#stud').attr('data',ff)
	displayname1(ff);
});

$(document).ready(function(){
$('#stud').on('click','.stunam',function(){
	totalattendance($(this).attr('data'),$('#stud').attr('data'));
	});
});
function totalattendance(str,ttr){
if (str == "") {
        document.getElementById("dshow").innerHTML = "";
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
                document.getElementById("dshow").innerHTML = xmlhttp.responseText;
				firstname();
            }
        };
        xmlhttp.open("GET","totalattendance.php?q="+str+"&r="+ttr,true);
        xmlhttp.send();
    	
}
}
	function displayname1(str){
    if (str == "") {
        document.getElementById("stud").innerHTML = "";
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
                document.getElementById("stud").innerHTML = xmlhttp.responseText;
				firstname();
            }
        };
        xmlhttp.open("GET","tattendance2.php?q="+str,true);
        xmlhttp.send();
    }
}	
</script>