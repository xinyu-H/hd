<?php
   include('./conn.php');
   if(@$_GET['text']){
      $text=$_GET['text'];
      $sql="update hd_text set gyhd='$text'";
      $res=$m->query($sql);
      if($res){
         $sql2="select * from hd_text";
         $res2=$m->query($sql2);
         if($res2){
            while($arr=$res2->fetch_assoc()){
               echo $arr['gyhd'];
            }
         }
      }
   }else{
      $sql3="select * from hd_text";
      $res3=$m->query($sql3);
      if($res3){
         while($arr=$res3->fetch_assoc()){
            echo $arr['gyhd'];
         }
      }
   }
   
?>