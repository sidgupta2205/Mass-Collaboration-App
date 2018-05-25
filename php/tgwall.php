<?php
session_start();
?>
<html>
<head>
<title>
GROUPS
</title>
<link rel="stylesheet" href="../style/tgwall.css" media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebaratt1.css"  media="all">


<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
  </head>
<body>
<div class="container">
<div id="header">
<div id="buttonss">
<div id="leftnav">
<?php
include('sidebar.php');
?>
<a href="#" data-toggle=".container" >
 <button type="submit" id="bu1"><img src="../icon/AT1.png"  alt="Submit"></button>
 </a>
</div>
<div id="bugwall">
GWALL
</div>
<div id="bumygroups">
MYGROUPS
</div>
</div>
<div id="kaliPati">
<input type="text" placeholder="search for groups" id="gsearch"/>
</div>
</div>
<div id="maincontent">
<div id="gwall" class="dis">
<?php
include('gwall1.php');
?>
</div>
<div id="mygroups" class="dis1">
<?php
include('mygroups.php');
?>
</div>
</div>
</div>
</body>
<script>
$(function(){
$("#gsearch").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#disss").html(html).show();
	}
	});
}return false;    
});

jQuery("#disss").on("click",'.show',function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
	rtr = $(this).attr('data');
	window.location = 'postg.php?q='+rtr;
});
jQuery(document).on("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#disss").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#disss").fadeIn();
});
});



$('#bugwall').click(function(){
	$('#mygroups').removeClass("dis");
	$('#mygroups').addClass("dis1");
	$('#gwall').removeClass("dis1");
	$('#gwall').addClass("dis");	
	
});
$('#bumygroups').click(function(){
	$('#gwall').removeClass("dis");
	$('#gwall').addClass("dis1");
	$('#mygroups').removeClass("dis1");
	$('#mygroups').addClass("dis");
});
$('.like').click(function(){
changelike($(this).attr("src"),$(this).parent().attr('data'),this);
});
$('.viewcomments').click(function(){
showcomments($(this).closest(".post").attr('data'),this);
});
$('.comment').click(function(){
	  $(this).parent().find("#commentbox").toggleClass("dis1 dis");
 });
 
$('.commentsubmit').click(function(){
	comment($(this).parent().find(".area").val(),$(this).closest(".post").attr('data'),this);
$(this).parent().find(".area").val('');
	}); 
function changelike(str,pqr,rrt) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 $(rrt).attr("src",xmlhttp.responseText);
				 changeno($(rrt).parent().attr('data'),rrt);
            }
        };
        xmlhttp.open("GET","like.php?q="+str+"&r="+pqr,true);
        xmlhttp.send();
    }

function changeno(str,ptr) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 $(ptr).parent().find(".nolike").text(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET","nolike.php?q="+str,true);
        xmlhttp.send();
    }

function comment(str,ptr,jjk) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 $(jjk).parent().find(".commentsu").text(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET","comment.php?q="+str+"&r="+ptr,true);
        xmlhttp.send();
    }	
function showcomments(str,jjk) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 $(jjk).parent().find(".commentsu").html(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET","showcomments.php?q="+str,true);
        xmlhttp.send();
    }	
	
	$("#mygroups").on('click','.mgroup',function(){
		rrl = $(this).attr('data');
	window.location = 'postg.php?q='+rrl;

	});

	</script>
</html>