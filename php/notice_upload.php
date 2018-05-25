
<?php
    
	$con = mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
    $r = "select text, src from notice WHERE teach_id = '".$_SESSION['id']."' ORDER BY notice_id DESC";
	$res = mysqli_query($con,$r);
while($pro_rows=mysqli_fetch_array($res))
{

	if($pro_rows['src']!="" && $pro_rows['text']!="")
	{
	echo '<div id="poosd">
	<p><u>UIT RGPV</u></p>
	<center><img src="'.$pro_rows['src'].'" alt="image" width="80%" height="60%"/>
    <h1> ' .$pro_rows['text'].'</h1></center>
	</div>
	';
	}
		else if($pro_rows['src']==""){
	echo '<div id="poosd">
	<p><u>UIT RGPV</u></p>
	<center><h1> ' .$pro_rows['text'].'</h1></center>
	</div>
	';	
	}
	
		else if($pro_rows['text']==""){
	echo '<div id="poosd">
	<p><u>UIT RGPV</u></p><center>
	<img src="'.$pro_rows['src'].'" alt="image" width="80%" height="60%"/></center>
	</div>
	';	
	}
	
}

?>
