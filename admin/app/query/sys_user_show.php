<?php

include_once '../../../lib/config.inc.php';
$Db = new MySqlConn;

$result=$Db->query('SELECT CONCAT(p.pname,u.fname," " ,u.lname)fullname,u.username,tu.type_user,tu.type_color  from user u INNER JOIN pname p ON p.pname_id=u.pname
        INNER JOIN type_user tu ON tu.type_id=u.type_user_id '
        , '');
echo json_encode($result);