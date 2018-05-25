<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload Image Without Page Refresh!</title>
		<link rel="stylesheet" href="../style/noti.css" media="all">
        <script type="text/javascript" src="../script/js/jquery.min.js"></script>
        <script type="text/javascript" src="../script/js/jquery.form.js"></script>

        <script type="text/javascript" >
		
            $(document).ready(function() {
                $('#bu3').click(function() {
                    $("#viewimage").html('');
                    $("#viewimage").html('<img src="../img/loading.gif" />');
                    $(".uploadform").ajaxForm({
                        target: '#viewimage'
                    }).submit();
                });
            });
        </script> 
    </head> 

    
         <form class="uploadform" method="post" enctype="multipart/form-data" action='upload_notice.php'>
			<textarea id="postarea" name="texta"></textarea>
                <span class="bu2"><em>Attach Image</em> <input type="file" name="imagefile" id="jjj"></span>
				<input type="submit" value="POST" name="submitbtn" id="bu3">
            <input id="hid" type="hidden" name="subject" value=""/>
			</form>
            
 
  
