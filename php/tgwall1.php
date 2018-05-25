<head>
<link rel="stylesheet" href="../style/tgwall1.css" media="all">

</head>

<div id="disss">
</div>
<div id="lalPati">
<?php
    
	$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
    $f="select g_id from following where us_id = '".$_SESSION['id']."' ";
	$res = mysqli_query($con,$f);
while($pro_rows=mysqli_fetch_array($res))
{
 
	$r = "select post, image, post_id from group_post WHERE group_id = '".$pro_rows['g_id']."' ORDER BY post_id DESC";
	$resi = mysqli_query($con,$r);
	$k = "select name from groups WHERE gro_id='".$pro_rows['g_id']."'";
	$ghy = mysqli_query($con,$k);
	$kkk = mysqli_fetch_array($ghy);
	while($iii=mysqli_fetch_array($resi))
	{
		$nolike = "select like_id from post_like WHERE like_post_id='".$iii['post_id']."' ";
		$nolike1 = mysqli_query($con,$nolike);
		$nolike2 = mysqli_num_rows($nolike1);
	$like = "select like_id from post_like WHERE like_user_id='".$_SESSION['id']."' AND like_post_id='".$iii['post_id']."' ";
	$like1 = mysqli_query($con,$like);
	$like2 = mysqli_fetch_array($like1);
    if($like2!="")
	{
		$src  = "../icon/like1.png";
	}
else{
	$src = "../icon/like.png";
}	
	if($iii['image']==""){
	echo '<div class="post" data="'.$iii['post_id'].'">
	<p><u>' .$kkk['name'].'</u></p>
	<center><h1> ' .$iii['post'].'</h1></center><img src="'.$src.'" class="like"/><span class="nolike"> '.$nolike2.'
	</span><img class="comment" src="../icon/comment.png"/>
	<div id="commentbox" class="dis1"><textarea class="area"></textarea><button class="commentsubmit">POST</button><div class="commentsu"></div><div class="viewcomments"><u>viewcomments</u></div></div></div>
	';	
	}
	else if($iii['image']!="" && $iii['post']!="")
	{
	echo '<div class="post" data="'.$iii['post_id'].'">
	<p><u>' .$kkk['name'].'</u></p>
	<center><img src="'.$iii['image'].'" alt="image" height="60%" width="80%"/>
    <h1> ' .$iii['post'].'</h1></center><img src="'.$src.'" class="like"/><span class="nolike"> '.$nolike2.'
	</span><img class="comment" src="comment.png"/>
	<div id="commentbox" class="dis1"><textarea class="area"></textarea><button class="commentsubmit">POST</button><div class="commentsu"></div><div class="viewcomments"><u>viewcomments</u></div></div>
	</div>
	';	 	
	}
	
}
}
?>
</div>