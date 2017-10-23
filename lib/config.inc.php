<?php

define("host", "localhost");
define("username", "akathosp_poknoi");
define("password", "48172520914072529mM");
define("db", "akathosp_poknoi");


class MySqlConn {

    protected $_mysql;
    protected $_tableName;
    protected $_where;
    protected $_order;
    protected $_limit;
    protected $_and;

    public function __construct() {
        $this->_mysql = new mysqli(host, username, password, db)
                or die('not connect to sql');
    }

    public function where($prop, $value,$sql='') {
        if (!empty($prop) && !empty($value)) {
            $this->_where = "WHERE $prop = '$value'";
        }else{
            $sql=$sql;
            $this->_where="WHERE $sql";
        }
    }
   

    public function order($order, $sort) {
        if (!empty($order)) {
            $this->_order = "order by $order $sort";
        }
    }

    public function limit($value) {
        if (!empty($value)) {
            $this->_limit = "LIMIT $value";
        }
    }

    public function query($sql = '', $tableName = '') {
        if (!empty($sql)) {
            $sql = $sql;
        } else {
            $sql = 'SELECT * FROM ';
        }
        $this->_tableName = $tableName;
        $query = $this->_mysql->query('SET NAMES UTF8');
        $query = $this->_mysql->query("$sql $this->_tableName $this->_where
                 $this->_order $this->_limit");

        while ($row = $query->fetch_array()) {
            $results[] = $row;
        }
        return $results;
    }

    public function insert($tableName , $data) {

        if (!empty($data)) {

            $keys = array_keys($data);
            $value = array_values($data);

            $sql = "INSERT INTO $tableName ";
            $sql .= "(";
            foreach ($keys AS $key => $k) {
                $sql .= $k;
                if ($key !== count($keys) - 1)
                    $sql.= ', ';
            }
            $sql .= ")";
            $sql .= "VALUES ";
            $sql .= "(";
            foreach ($value AS $val => $v) {
                $sql .= "'" . $v . "'";
                if ($val !== count($value) - 1)
                    $sql.= ', ';
            }
            $sql .= ")";
            if ($sql) {
                $this->_mysql->query($sql);
            }
            
        }
        
    }
public function update($tableName,$data)
    {
        if(!empty($data)){
        $keys = array_keys($data);
        
       $sql = "UPDATE $tableName SET ";
            for($i = 0; $i < count($data); $i++)  
           {  
                if(is_string($data[$keys[$i]])){  
                    $sql .= $keys[$i]."='".$data[$keys[$i]]."'";  
                    if($i != count($data)-1){$sql .= ',';}     
                }   
            }
            
            $sql .= $this->_where;
            
        if($sql){ 
        $this->_mysql->query($sql);
        }
        }
    }
   
   
    public function num_rows($sql,$tableName='') { 
         if (!empty($sql)) {
            $sql = $sql;
        } else {
            $sql = 'SELECT * FROM';
        }
        $this->_tableName = $tableName;
        
        $query = $this->_mysql->query("$sql $this->_tableName $this->_where");
        $results = mysqli_num_rows($query);

        return $results;
    }
//ตรวจสอบการเข้าใช้งานแต่ละหน้า
    public function rule($pages) {
        
        $warning = 'ท่านไม่สามารถใช้งานหน้านี้ได้ กรุณาติดต่อ ADMIN';
        $type_user = (isset($_SESSION['id_user']) ? $_SESSION['id_user'] : '');//ตรวจสอบถ้ามีจาก session ของ id_user ถ้าไม่มีให้แทนด้วยค่าว่าง
        if ($type_user == "") { //ตรวจสอบว่าถ้าไม่มีการ login ให้ออกจากการทำงาน
            echo $warning;
            exit();
        }
        
        else { //ถ้ามีการ login จริง ให้นำค่า id_user มาหาระดับของ user
            $sql = 'SELECT t.' . $pages . ' FROM user u INNER JOIN type_user t ON t.type_id=u.type_user_id '
                    . ' WHERE id_user=' . $type_user;
            $query = $this->_mysql->query($sql);
            while ($row = $query->fetch_array()) {
                $id = $row[$pages];
            }
            if ($id != '1') { 
                echo $warning;
                exit();
            }
        }
    }

}

function uppic_only($img,$imglocate,$limit_size=2000000,$limit_width=0,$limit_height=0,$i_num=NULL){  
   
    $allowed_types=array("jpg","jpeg","gif","png");     
//  echo "1<br>";  
    $file_up=NULL;  
    if($img["name"]!=""){  
        $fileupload1=$img["tmp_name"];  
        $data_Img=@getimagesize($fileupload1);  
        $g_img=explode(".",$img["name"]);  
        $ext = strtolower(array_pop($g_img));    
        if($i_num){  
            $file_up=time()."-".$i_num.".".$ext;          
        }else{  
            $file_up=time().".".$ext;                     
        }  
        $canUpload=0;  
//      echo "2<br>";  
        if(isset($data_Img) && $data_Img[0]>0 && $data_Img[1]>0){  
//          echo "3<br>";  
            if($img["size"]<=$limit_size){                 
                if($limit_width>0 && $limit_height>0){  
                    if($data_Img[0]<=$limit_width && $data_Img[1]<=$limit_height){  
                        $canUpload=1;  
//                      echo "5<br>";  
                    }                     
                }elseif($limit_width>0 && $limit_height==0){  
                    if($data_Img[0]<=$limit_width){  
                        $canUpload=1;  
//                      echo "6<br>";  
                    }         
                }elseif($limit_width==0 && $limit_height>0){  
                    if($data_Img[1]<=$limit_height){  
                        $canUpload=1;  
//                      echo "7<br>";  
                    }                                                 
                }else{  
                    $canUpload=1;                     
//                  echo "8<br>";  
                }             
            }else{  
//              echo "4<br>";  
            }             
        }         
        if($fileupload1!="" && @in_array($ext,$allowed_types) && $canUpload==1){              
                if(is_uploaded_file($fileupload1)){  
                    @move_uploaded_file($fileupload1,$imglocate.$file_up);    
                    @chmod($imglocate.$file_up,0777);                                 
                }  
        }else{  
            $file_up=NULL;  
           
        }  
    }  
    return $file_up; // ส่งกลับชื่อไฟล์  
}  

function DateThai($strDate)

{

$strYear = date("Y",strtotime($strDate))+543;

$strMonth= date("n",strtotime($strDate));

$strDay= date("j",strtotime($strDate));

$strHour= date("H",strtotime($strDate));

$strMinute= date("i",strtotime($strDate));

$strSeconds= date("s",strtotime($strDate));

$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

$strMonthThai=$strMonthCut[$strMonth];

return "$strDay $strMonthThai $strYear";

}
