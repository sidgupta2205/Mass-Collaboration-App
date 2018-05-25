<?php
$sub = $_GET['sub'];
$user = $_GET['user'];
$day = $_GET['day'];
$month = $_GET['month'];
$result = $_GET['result'];
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$pre  = 'update attendance set `month`="'.$month.'", `'.$day.'`= "'.$result.'" WHERE att_user_id="'.$user.'" AND subject = "'.$sub.'" ';
mysqli_query($conn,$pre);
echo $result;
?>