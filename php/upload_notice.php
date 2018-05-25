<?php
session_start();
$sub = $_POST['subject'];
$file_formats = array("jpg", "png", "gif", "bmp");

$filepath = "../upload_notice/";

if ($_POST['submitbtn']=="POST") {
if($_FILES['imagefile']['size']!=0 && !empty($_POST['texta']))
{	
 $text = $_POST['texta'];
 $name = $_FILES['imagefile']['name']; // filename to get file's extension
 $size = $_FILES['imagefile']['size'];
 
 if (strlen($name)) {
 	$extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
 		if ($size < (2048 * 1024)) { // check it if it's bigger than 2 mb or no
 			$imagename = md5(uniqid() . time()) . "." . $extension;
 			$tmp = $_FILES['imagefile']['tmp_name'];
 				if (move_uploaded_file($tmp, $filepath . $imagename)) {
					$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
mysqli_query($con,"INSERT INTO `notice` (`notice_id`, `teach_id`, `subject_id`, `text`, `src`) VALUES (NULL, '".$_SESSION['id']."', '".$sub."', '".$text."', '".$filepath.'/'. $imagename ."')");
//mysqli_query($con,"INSERT INTO `group_post` (`post_id`, `group_id`, `post`, `user_id`, `image`) VALUES (NULL, '1','".$text."', '2', '".$filepath.'/'. $imagename ."')");
 					echo '<div id="poosd"><p><u> Uit,Rgpv </u></p><center><img class="preview" alt="" src="'.$filepath.'/'. $imagename .'" height="60%" width="80%" /><h1> ' .$text.'</h1></center></div>';
 				} else {
 					echo "Could not move the file.";
 				}
 		} else {
 			echo "Your image size is bigger than 2MB.";
 		}
 	} else {
 			echo "Invalid file format.";
 	}
 }
 else {
 	echo "Please select image..!";
 exit();
 }
}
else if(!empty($_POST['texta']))
{
	$text = $_POST['texta'];
echo '<div id="poosd"><p><u> Uit,Rgpv </u></p><center><h1> ' .$text.'</h1></center></div>';
$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
mysqli_query($con,"INSERT INTO `notice` (`notice_id`, `teach_id`, `subject_id`, `text`, `src`) VALUES (NULL, '".$_SESSION['id']."', '".$sub."', '".$text."', '')");
//mysqli_query($con,"INSERT INTO `group_post` (`post_id`, `group_id`, `post`, `user_id`, `image`) VALUES (NULL, '1','".$text."', '2', '')");
	}
	else if($_FILES['imagefile']['size']!=0)
{
	$name = $_FILES['imagefile']['name']; // filename to get file's extension
 $size = $_FILES['imagefile']['size'];
 
 if (strlen($name)) {
 	$extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
 		if ($size < (2048 * 1024)) { // check it if it's bigger than 2 mb or no
 			$imagename = md5(uniqid() . time()) . "." . $extension;
 			$tmp = $_FILES['imagefile']['tmp_name'];
 				if (move_uploaded_file($tmp, $filepath . $imagename)) {
					$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
mysqli_query($con,"INSERT INTO `notice` (`notice_id`, `teach_id`, `subject_id`, `text`, `src`) VALUES (NULL, '".$_SESSION['id']."', '".$sub."', '', '".$filepath.'/'. $imagename ."')");
//mysqli_query($con,"INSERT INTO `group_post` (`post_id`, `group_id`, `post`, `user_id`, `image`) VALUES (NULL, '1','', '2', '".$filepath.'/'. $imagename ."')");

 					echo '<div id="poosd"><p><u> Uit,Rgpv </u></p><center><img class="preview" alt="" src="'.$filepath.'/'. $imagename .'" height="60%" width="80%" /></center></div>';
 				} else {
 					echo "Could not move the file.";
 				}
 		} else {
 			echo "Your image size is bigger than 2MB.";
 		}
 	} else {
 			echo "Invalid file format.";
 	}
 }
  else {
 	echo "Please select image..!";
 exit();
}
}
else{
	echo '<div id="poosd"><h1>please select image or data</h1></div>';
}	

}



?>