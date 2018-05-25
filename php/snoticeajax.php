<?php
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());

$ss = "select Branch, Semester from signup where ID='".$_SESSION['id']."'";
$res = mysqli_query($conn,$ss);
$arr = mysqli_fetch_array($res);
$sub_id = "select sub_id,sub_name from subjects where sub_branch='".$arr['Branch']."' AND sub_sem='".$arr['Semester']."'";
$resj = mysqli_query($conn,$sub_id);
while($arrkj = mysqli_fetch_array($resj))
{
$nn = "select text, src from notice where subject_id='".$arrkj['sub_id']."'";
$resjd = mysqli_query($conn,$nn);
while($ar = mysqli_fetch_array($resjd))
{
	if($ar['src']=='')
{
echo '<div class="post" >
	<p><u>' .$arrkj['sub_name'].'</u></p>
	<center><h1> ' .$ar['text'].'</h1></center></div>';	
}

else if($ar['text']=='')
{
	echo '<div class="post">
	<p><u>' .$arrkj['sub_name'].'</u></p>
	<center><img src="'.$ar['src'].'" alt="image" height="60%" width="80%"/>
   </center></div>';
}
else if($ar['src']!="" && $ar['text']!="")
{
echo '<div class="post">
	<p><u>' .$arrkj['sub_name'].'</u></p>
	<center><img src="'.$ar['src'].'" alt="image" height="60%" width="80%"/>
    <h1> ' .$ar['text'].'</h1></center></div>'	;
}
}	
}
?>