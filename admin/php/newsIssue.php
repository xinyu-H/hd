<?php
   include('./conn.php');
   
   if(@$_GET['title']!=''||@$_GET['area']!=''||@$_GET['date']!=''){
      $title=$_GET['title'];
      $area=$_GET['area'];
      $date=$_GET['date'];
		$time=$_GET['time'];
      $sql="insert into news(news_title,news_text,news_time,time) values('$title','$area','$date',$time)";
      $res=$m->query($sql);
      if($res){
         echo 'ok';
      }
   }else{
      $sql2="select * from news";
      $res2=$m->query($sql2);
      if($res2){
         while($arr=$res2->fetch_assoc()){
            echo json_encode($arr).' ';
         }
      }
   }
   
?>