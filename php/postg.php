<?php
session_start();
$q = $_GET['q'];
$_SESSION['gro_id']=$q;
$rr = "select name from groups where gro_id='".$q."'";
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$sql = mysqli_query($con,$rr);
$nnb = mysqli_fetch_array($sql);
$_SESSION['gr_name']=$nnb['name'];
$pp = "select * from following where g_id='".$q."' and us_id='".$_SESSION['id']."'";
$oos = mysqli_query($con,$pp);
if(mysqli_num_rows($oos)>0)
{
$tfe = 0;
}
else{
$tfe = 1;	
}
?>
<html>
<head>
<title>
GROUPS
</title>
<link rel="stylesheet" href="../style/post.css" media="all">
<link rel="stylesheet" type="text/css" href="../style/sidebaratt1.css"  media="all">


<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
  <script src="../script/mo.js"></script>
  
</head>
<body>
<div class="container">
<div id="kkk">
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

<?php echo $nnb['name'];?>

<input id="condition" type="button" value="follow"></input>
</div>
</div>
<div id="kaliPati">
<div class="bugwall" id="bupost">
post
</div>
<div class="bugwall" id="budiscus">
TRENDS
</div>
</div>
<div id="maincontent">
<div id="post" class="dis">
<div id="postwh">
<?php
include('post1.php');
?>
</div>
<div id="viewimage"></div>
<div id='presentimage'>
<?php
include('sql6.php');
?>
</div>
</div>
<div id="discuss" class="dis1">
<BR>
COMING UP SHORTLY....
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
var vj = <?php echo $tfe; ?>;
$('#condition').click(function()
{
	follow(vj);
	
});

if(vj==0)
{
	$("#condition").val("unfollow");
	}
else{
	$("#condition").val("follow");
}
function follow(str){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 $("#condition").val(xmlhttp.responseText);
				 if(xmlhttp.responseText=='unfollow')
				 {
					 vj=0;
				 }
				 else{
					 vj=1;
				 }
            }
        };
        xmlhttp.open("GET","follow.php?q="+str,true);
        xmlhttp.send();
    }
	

</script>