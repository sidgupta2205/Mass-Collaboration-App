<?php
include('connect.php');
$id = addslashes($_REQUEST['ID']);
$kkk= mysql_query("select * from signup WHERE ID=$id");
$kkk = mysql_fetch_assoc($kkk);
$kkk = $kkk['image'] ;
echo $kkk;
?>