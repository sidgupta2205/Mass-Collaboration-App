<?php
$conn=mysqli_connect('localhost','root','','signup') or die("error:".mysqli_error());
$res = "select subj_id from teac_sub where te_id = '".$_SESSION['id']."' ";
			$resu = mysqli_query($conn,$res);
			while($arar= mysqli_fetch_array($resu))
			{
            $rrer = "select * from subjects where sub_id = '".$arar['subj_id']."'";
			$resui = mysqli_query($conn,$rrer);
			$arari= mysqli_fetch_array($resui);
			echo "<div data='".$arar['subj_id']."' class='subf'>". $arari['sub_name']. "</div>";
			}
			?>