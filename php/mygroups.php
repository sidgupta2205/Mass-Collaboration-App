<head>
<link rel="stylesheet" href="../style/mygroups.css" media="all"></head>
<?php
$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$n= "select g.name, g.gro_id from groups as g, following as f where f.g_id=g.gro_id AND f.us_id='".$_SESSION['id']."' order by g.name";
$ref = mysqli_query($con,$n);
while($pro_row=mysqli_fetch_array($ref))
{
echo '<div class="mgroup" data='.$pro_row['gro_id'].'><br><u>
'.$pro_row['name'].'</u></div>
';
}

?>