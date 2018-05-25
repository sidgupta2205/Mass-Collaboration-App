<?php
$q = $_GET['q'];
if($q=='follow')
{
	$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
	$s = "select s.e_mail,s.ID,s.College,g.gro_id,g.name FROM signup AS s,groups AS g WHERE s.college=g.name AND s.ID=1";
	$result = mysqli_query($con,$s);
    $row = mysqli_fetch_assoc($result);
	
	/*$t=mysqli_query($con,"INSERT INTO `following` (`g_id`, `us_id`) VALUES ('".$row['gro_id']."', '".$row['ID']."')");*/
     $f="select g_id from following where us_id = '".$row['ID']."' ";
	 $res = mysqli_query($con,$f);
while($pro_rows=mysqli_fetch_array($res))
{
	$product[] = $pro_rows['g_id']; 
}
for ($i=0;$i<sizeof($product);$i++){
	$r = "select post from group_post WHERE group_id = '".$product[$i]."'";
	$res = mysqli_query($con,$r);
	$iii = mysqli_fetch_array($res);
	echo '<div id="post">
           	
	
	';
}
	echo "thank you for following";

}
else{
	$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
	$s = "select s.e_mail,s.ID,s.College,g.gro_id,g.name FROM signup AS s,groups AS g WHERE s.college=g.name AND s.ID=2";
	$result = mysqli_query($con,$s);
    $row = mysqli_fetch_assoc($result);
	$t=mysqli_query($con,"DELETE FROM `following` WHERE g_id='".$row['gro_id']."' AND us_id='".$row['ID']."'");
	
	echo "you unfollowed the group";
	
}
?>