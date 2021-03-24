<?php
	include('./conn.php');
	$time1=$_GET['time1'];
	$time2=$_GET['time2'];
	$sql="select * from news where time>$time1 and time<$time2";
	$res=$m->query($sql);
	if($res->num_rows>0){
		while($arr=$res->fetch_assoc()){
			echo json_encode($arr).' ';
		}
	}else{
		echo '1';
	}


?>