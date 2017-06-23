<?PHP 
include_once '../../lib/config.inc.php';
$Db = new MySqlConn;
$username= isset($_POST['username'])? $_POST['username']:'';
$password= isset($_POST['password'])? $_POST['password']:'';
if($username==''||$password==''){
    echo 'ไม่มีข้อมูล';
}else{
$Db->where('username', $username);
$query=$Db->num_rows('user');
        echo $query;
}
?>
