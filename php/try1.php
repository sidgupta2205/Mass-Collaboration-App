<html>
<head>
<title>
lkkl
</title>
</head>
<body>
<input type="button" id="confirm" value="follow">
<div id="maintable">
</div>
<script src="../script/jquery-2.1.4.js"></script>
<script>
$('#confirm').click(function(){ 
	var j = $('#confirm').val();
	if (j==='follow'){
	$('#confirm').val("unfollow");
	follow(j);
	}
	else{
		$('#confirm').val("follow");
		follow(j);
	}
	});
	
	function follow(str) {
    if (str == "") {
        document.getElementById("maintable").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("maintable").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","try2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<?php
/*$con = mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
$s = "select s.e_mail,s.ID,s.College,g.gro_id,g.name FROM signup AS s,groups AS g WHERE s.college=g.name AND s.ID=2";
$result = mysqli_query($con,$s);
$row = mysqli_fetch_assoc($result);
echo $row['e_mail'];
echo $row['name'];
$t=mysqli_query($con,"INSERT INTO `group_post` (`group_id`, `post`, `user_id`) VALUES ('".$row['gro_id']."', 'kkkkkk', '".$row['ID']."')");
*/
?>
</body>