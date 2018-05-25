<?php
error_reporting(E_ALL ^ E_NOTICE);
if(!empty($_FILES['image_file'])){
	include('config.php');
$files= $_FILES['image_file'];
$file_name = $files['name'];
$error  = '';
$ext = strtolower(substr(strrchr($file_name,"."),1));
if($validation_type==1){
	$file_info = getimagesize($_FILES['image_file']['tmp_name']);
	if(empty($file_info))
	{
		$error .= "the uploaded file doesnot seem to be a image";
		echo "hello";
	}
	else{
		$file_mime = $file_info['mime'];
		echo "jsss";
	if($ext=='jpc' || $ext=='jpx' || $ext=='jp2')
	{
		$extension = $ext;
		echo "dddddddd";
	}
	else{
		$extension = ($mime[$file_mime]=='jpeg')?'jpg': $mime[$file_mime];
		echo "dddd";
	}
	if(!$extension)
	{
		$extension = '';
	    $file_name = str_replace('.','',$file_name);
		echo "ddddddkkkkk";
	}
	}
}

else if($validation_type==2)
{
	if(!in_array($ext,$image_extensions_allowed))
	{
		$exts = implode(',' ,$image_extensions_allowed);
		$error .= "you must upload a file with given extensions:".$exts;
		echo "ddfrrtyy";
	}
	$extension = $ext;
}
if($error=="")
{
	$new_file_name = strtolower($file_name);
	$new_file_name = str_replace('','-',$new_file_name);
	$new_file_name = substr($new_file_name,0,strlen($ext));
	$new_file_name .= $ext;
	$move_file = move_uploaded_file($file['tmp_name'],$upload_image_to_folder.$new_file_name);
	if ($move_file)
		{
			$done = "the image has been uploaded";
		}

		}
	else{
		@unlink($file['tmp_name']);
	}	
$file_upload = true;
}
else{
	echo "mkkk";
}
?>