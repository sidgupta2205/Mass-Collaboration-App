<?php
	$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
if($_POST)
{
$q=$_POST['search'];
$f = "select gro_id, name from groups where name like '%$q%' order by gro_id LIMIT 5";
$sql_res=mysqli_query($con,$f);
while($row=mysqli_fetch_array($sql_res))
{
$username=$row['name'];
$b_username='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
?>
<div class="show" align="left" data=<?php echo $row['gro_id'] ?> >
<img src="../icon/abutton.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/>
</div><br/>
<?php
}
}
?>
