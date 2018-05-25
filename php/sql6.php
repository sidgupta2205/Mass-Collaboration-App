
<?php
    
	$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
    $r = "select post, image, post_id from group_post WHERE group_id = 1 ORDER BY post_id DESC";
	$res = mysqli_query($con,$r);
while($pro_rows=mysqli_fetch_array($res))
{

$nolike = "select like_id from post_like WHERE like_post_id='".$pro_rows['post_id']."' ";
		$nolike1 = mysqli_query($con,$nolike);
		$nolike2 = mysqli_num_rows($nolike1);
	$like = "select like_id from post_like WHERE like_user_id=1 AND like_post_id='".$pro_rows['post_id']."' ";
	$like1 = mysqli_query($con,$like);
	$like2 = mysqli_fetch_array($like1);
   if($like2!="")
	{
		$src  = "../icon/like1.png";
	}
else{
	$src = "../icon/like.png";
}
	if($pro_rows['image']!="" && $pro_rows['post']!="")
	{
	echo '<div id="poosd" data="'.$pro_rows['post_id'].'">
	<p><u>UIT RGPV</u></p>
	<center><img src="'.$pro_rows['image'].'" alt="image" width="80%" height="60%"/>
    <h1> ' .$pro_rows['post'].'</h1></center><img src="'.$src.'" class="like"/><span class="nolike"> '.$nolike2.'
	</span><img class="comment" src="comment.png"/>
	<div id="commentbox" class="dis1"><textarea class="area"></textarea><button class="commentsubmit">POST</button><div class="commentsu"></div><div class="viewcomments"><u>viewcomments</u></div></div>
	</div>
	';	 	
	}
		else if($pro_rows['image']==""){
	echo '<div id="poosd" data="'.$pro_rows['post_id'].'">
	<p><u>UIT RGPV</u></p>
	<center><h1> ' .$pro_rows['post'].'</h1></center>
	<img src="'.$src.'" class="like"/><span class="nolike"> '.$nolike2.'
	</span><img class="comment" src="../icon/comment.png"/>
	<div id="commentbox" class="dis1"><textarea class="area"></textarea><button class="commentsubmit">POST</button><div class="commentsu"></div><div class="viewcomments"><u>viewcomments</u></div></div>
	</div>
	';	
	}
	
		else if($pro_rows['post']==""){
	echo '<div id="poosd">
	<p><u>UIT RGPV</u></p><center>
	<img src="'.$pro_rows['image'].'" alt="image" width="80%" height="60%"/></center>
	</div>
	';	
	}
	
}

?>
