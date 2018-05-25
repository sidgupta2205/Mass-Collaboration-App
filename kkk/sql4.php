<?php
$conn=mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
 
 $s="select image from signup where id=1 ";
 $result = mysqli_query($conn,$s);
 $row = mysqli_fetch_assoc($result);

 echo "<img src='".$row['image']."' alt='avatar' />";
?>