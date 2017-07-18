<?php

include_once '../../../lib/config.inc.php';
$Db = new MySqlConn;

if(isset($_POST["action"])=="add"){
   
    $data=array(
       
      'username'=>$_POST['username'],
        'pname'=>$_POST['pname'],
        'password'=> md5($_POST['password']),
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'type_user_id'=>$_POST['type_user']
    );
    
  $result=$Db->insert('user',$data);
  
}
