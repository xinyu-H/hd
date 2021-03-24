<?php
	include('./conn.php');
	$index=$_GET['index'];
	$sql="delete from news where id=$index";
	$res=$m->query($sql);
	if($res){
		echo 'ok';
	}

?>