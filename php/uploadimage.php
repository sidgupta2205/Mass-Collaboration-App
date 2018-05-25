<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload Image Without Page Refresh!</title>
        <script type="text/javascript" src="../script/js/jquery.min.js"></script>
        <script type="text/javascript" src="../script/js/jquery.form.js"></script>

        <script type="text/javascript" >
            $(document).ready(function() {
                $('#submitbtn').click(function() {
                    $("#viewimage").html('');
                    $("#viewimage").html('<img src="img/loading.gif" />');
                    $(".uploadform").ajaxForm({
                        target: '#viewimage'
                    }).submit();
                });
            });
        </script> 
    </head> 
    <body>
        <h2>Upload Image Without Page Refresh!</h2>
 
            <form class="uploadform" method="post" enctype="multipart/form-data" action='upload.php'>
                Upload your image <input type="file" name="imagefile" />
				<input type="submit" value="Submit" name="submitbtn" id="submitbtn">
			</form>
			
            <div id='viewimage'></div>
 
    </body>
</html>