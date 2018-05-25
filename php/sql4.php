<?php
session_start();
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
 
 $s="select image from signup where id='".$_SESSION["id"]. "' ";
 $result = mysqli_query($conn,$s);
 $row = mysqli_fetch_assoc($result);

 echo "<img src='".$row['image']."' alt='avatar' />";
?>