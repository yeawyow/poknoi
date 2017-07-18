<?php

include_once '../../../lib/config.inc.php';
$Db = new MySqlConn;

if(isset($_POST["action"])=="add"){
    
    $data=array(
       
      'procur_title'=>$_POST['procur_title'],
        'procur_pdf'=>'ddddddddd',
        'procur_date'=>'2017-01-01'
    );
    
  $result=$Db->insert('procurement',$data);
  echo $result;
}
