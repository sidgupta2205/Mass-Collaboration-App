   <html>
   <head>
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
   <title>
   </title>
   <link rel="stylesheet" href="../style/tsidebar.css"/>
   </head>
   <?php
   session_start();
   ?>
   <body>
   
	<div id="sidebar">
	<ul>
            <li><a href="tdashboard.php">DASHBOARD</a></li>
			<span id="llo">
            <li><a href="#">SUBJECTS</a></li>
			<span id="oo" class="dis1">
			<?php
			$conn=mysqli_connect('localhost','root','','signup') or die("madarchod:".mysqli_error());
			$res = "select subj_id from teac_sub where te_id = '".$_SESSION['id']."' ";
			$resu = mysqli_query($conn,$res);
			while($arar= mysqli_fetch_array($resu))
			{
            $rrer = "select * from subjects where sub_id = '".$arar['subj_id']."'";
			$resui = mysqli_query($conn,$rrer);
			$arari= mysqli_fetch_array($resui);
			echo "<li data='".$arar['subj_id']."' class='sub'><a href='#'>". $arari['sub_name']. "</a></li>";
			}
			?>
			</span>
			</span>
            <li><a href="notice.php">NOTICES</a></li>
			<li><a href="#">GROUPS</a></li>
			<li><a href="marks.php">MARKS</a></li>
			<li><a href="tattendance.php">ATTENDANCE</a></li>
                <li><a href="tlogout.php">SIGN OUT</a></li>
        </ul>
    </div>
	</body>
	<script>
	$("#llo").hover(function()
	{
		$("#oo").toggleClass('dis1 dis');
	});
	</script>
	</html>