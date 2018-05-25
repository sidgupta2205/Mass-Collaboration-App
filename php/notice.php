<html>
<head>
<title>
notice
</title>
<link rel="stylesheet" href="../style/notice.css" media="all">
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
 <button type="submit" id="bu1"><img src="../icon/side2.png" alt="Submit"></button>
 </a>
</div>
<div id="main_heading">
NOTICE
</div>
</div>
<div id="kalipati">
<div id="subject" data="">
select subject
</div>
</div>
</div>
<div id="main_content">
<div id="postwh">
<?php 
include('notice1.php');
?>
</div>
<div id="viewimage">
</div>
<div id="presentimage">
<?php
include('notice_upload.php');
?>
</div>
</div>
</body>
<script>
$('.sub').click(function(){
$('#subject').text($(this).text());
$('#subject').attr('data',$(this).attr('data'));
$('#hid').val($(this).attr('data'));
});
</script>
</html>