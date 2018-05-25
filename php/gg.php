<?php
if(isset($_POST['submit']))
{
	$fname="sid";
	$lname= "gupta";
	$email = "AAS@GMAIL.COM";
	$mob = "9458547589";
	$pass = "gshdjuyts";
	$sem = "1";
	$bra = "sdsf";
	$clg = "uit";
	$dob = "15/11/1548";
	$gender= "male";
	
$image=addslashes(file_get_contents($_FILES['value']['tmp_name']));
include('connect.php');
mysql_query("UPDATE signup SET image='".$image."' WHERE ID = '4'");
echo "<img src=getimg.php?ID=4>";
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="photo.css"  media="all">
<title>
hello
</title>
</head>
<body>
<div style=" background:#FFFFFF; position:absolute; left:21%; top:8%; height:22%; width:41.4%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);"> </div>
	<div style="position:absolute; left:21%; top:8%;"> <img src="img/Status.PNG"><input type="button" onClick="upload_close();"  value="Update Status" style="background:#FFFFFF; border:#FFFFFF;"> <img src="img/photo&video.PNG"><input type="button"  value="Add Photos" onClick="upload_open();" name="file" style="background:#FFFFFF; border:#FFFFFF;"></div>
<div style=" background:#F2F2F2; position:absolute; left:21%; top:26.5%; height:6.5%; width:41.4%; z-index:-1;"> </div>

<form method="post" name="posting_txt" onSubmit="return blank_post_check();" id="post_txt">
	
	<div style="position:absolute; left:21.3%; top:11.5%;">
		<textarea style="height:100; width:550;" name="post_txt" maxlength="511" placeholder="What's on your mind?"></textarea>
        <input type="hidden" name="txt_post_time">
	</div>	
	<div style="position:absolute; left:50%; top:28.5%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
	</select> 
	</div>
	<div style="position:absolute; left:57%; top:28%;"> <input type="submit" value="post" name="txt" id="post_button" onClick="time_get()"> </div>
	</form>
	
	<form method="post" enctype="multipart/form-data" name="posting_pic" style="display:none;" id="post_pic" onSubmit="return Img_check();">
	
	<div style="position:absolute; left:21.3%; top:11.5%;">
		<textarea style="height:100; width:550;" name="post_txt" maxlength="511" placeholder="What's on your mind?"></textarea>
	</div>
    <input type="hidden" name="pic_post_time">
	<div style="position:absolute; left:50%; top:28.5%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
</select> </div>
	<div style="position:absolute; left:22%; top:28.5%;"> <input type="file" name="file" id="img"> </div>
	<div style="position:absolute; left:57%; top:28%;"> <input type="submit" value="post" name="file" id="post_button" onClick="time_get1()"> </div>
	</form>
</html>