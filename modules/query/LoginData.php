<?PHP 
session_start();
include_once '../../lib/config.inc.php';
$Db = new MySqlConn;
$username= isset($_POST['username'])? $_POST['username']:'';
$password= isset($_POST['password'])? md5($_POST['password']):'';

if($username==''|| $password==''){
    echo 'ไม่มีข้อมูล';
}else{
$Db->where('','',"username='$username' AND password='$password'");
$query=$Db->num_rows('user');
        if($query=='1'){
            $Db->where('username',$username);
           $result=$Db->query("SELECT * from user ");
           foreach ($result as $row){
             $data=array("login"=>"success");
           
           }
        }else{
             $data = array("login"=>"error");
        }
        $response = array(
      
        "data" => $data
    );	
                echo json_encode($response);   
}
?>
