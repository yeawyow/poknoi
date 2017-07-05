<?PHP

session_start();
include_once '../../lib/config.inc.php';
$Db = new MySqlConn;
$username = isset($_POST['username']) ? $_POST['username'] : ' ';
$password = isset($_POST['password']) ? md5($_POST['password']) : ' ';

if ($username == '') {
    $data = '';
} else if ($password == 'd41d8cd98f00b204e9800998ecf8427e') {
    $data = '';
} else {
    $Db->where('', '', "username='$username' AND password='$password'");
    $query = $Db->num_rows('user');
    if ($query == '1') {
        $Db->where('username', $username);
        $result = $Db->query("SELECT * from user ");
        foreach ($result as $row) {
            $data = "success";
            $_SESSION["status_login"]="logined";
        }
    } else {
        $data = "error";
    }
}
echo $data;
?>
