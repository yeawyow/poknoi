<?php
session_start();
include_once 'lib/config.inc.php';
$Db = new MySqlConn;
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>เทศบาลตำบลพอกน้อย | www.poknoi.go.th</title>
        <meta name="description" content="เทศบาลตำบลพอกน้อย">
        <meta property="og:title" content="เทศบาลตำบลพอกน้อย" >
        <meta property="og:site_name" content="เทศบาลตำบลพอกน้อย">
        <meta property="og:description" content="เทศบาลตำบลพอกน้อย" >
        <link href="img/เทศบาลตำบลพอกน้อย.ico" rel="shortcut icon" type="image/x-icon" />

        <meta property="og:type" content="article" >

        <link rel="manifest" href="เทศบาลตำบลพอกน้อย">
        <meta name="msapplication-TileColor" content="#ffffff">
      
        <meta name="theme-color" content="#ffffff">

        <meta name="robots" CONTENT="index, follow" >
        <meta name="googlebot" CONTENT="index, follow" >
        <meta name="revisit-after" CONTENT="1 days" >
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="theme/css/style.css">
        <link rel="stylesheet" href="theme/css/main.css">
        <link rel="stylesheet" href="theme/css/tab.css">
        <link rel="stylesheet" href="theme/css/responsive.css">

    </head>

    <body>
        <h1 style="display:none;">เทศบาลตำบลพอกน้อย</h1>


        <header id="header" class="">
            <div class="headerWrap">
                <div class="container-fluid">
                    <div class="header clearfix">
                        <div class="headerBrand">
                            <a href="index.php">
                                <div class="headerBrandImage"><img src="img/logo.jpg" alt="เทศบาลตำบลพอกน้อย"></div>
                                <div class="headerBrandText">
                                    <div class="headerBrandTextInner">เทศบาลตำบลพอกน้อย</div>
                                    <div class="headerBrandTextInner">www.poknoi.go.th</div>
                                </div>
                            </a>
                            <div class="wingwing"></div>
                        </div>
                        <div class="headerNavigation">

                            <div class="headerNavigation_lg">
                                <ul class="list-inline">
                                    <li><a class="txtautosize hover_unterline" href="index.php"><span class="fa fa-home"></span> หน้าแรก</a></li>
                                    <li><a class="txtautosize hover_unterline _blank" href=""><span class="fa fa-address-book"></span> รับเรื่องร้องเรียน</a></li>
                                    <li ><a  class="txtautosize hover_unterline _blank"  href="#" ><span class="fa fa-sign-in"></span> เข้าสู่ระบบ</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="mainNav">
                <div class="afterHeader">
                    <div class="dropdown">
                        <button class="dropbtn">เกี่ยวกับหน่วยงาน</button>
                        <div class="dropdown-content">
                            <a href="?m=main&p=history">ประวัติความเป็นมา</a>
                            <a href="?m=main&p=vision">วิสัยทัศน์ พันธกิจ</a>
                            <a href="?m=main&p=location">สภาพข้อมูลพื้นฐาน</a>
                            <a href="?m=main&p=charac">อำนาจหน้าที่</a>
                            <a href="?m=main&p=budget">งบประมาณ</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">หน่วยงานภายใน</button>
                        <div class="dropdown-content">
                            <a href="#" data-toggle="modal" data-target="#myModal">คณะผู้บริหาร</a>
                             <a href="#" data-toggle="modal" data-target="#sapa">สมาชิกสภาเทศบาล</a>
                              <a href="#" data-toggle="modal" data-target="#rat">ส่วนราชการ</a>
                            <a href="#" data-toggle="modal" data-target="#sumnugpalud">สำนักปลัดเทศบาล</a>
                            <a href="#" data-toggle="modal" data-target="#gongklung">กองคลัง</a>
                            <a href="#" data-toggle="modal" data-target="#gongchang">กองช่าง</a>
                            <a href="#" data-toggle="modal" data-target="#gongsasuk">กองสาธารณสุขและสิ่งแวดล้อม</a>
                            <a href="#" data-toggle="modal" data-target="#gongkansuksa">กองการศึกษาศาสนาและวัฒนธรรม</a>
                           

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">เทศบัญญัติ</button>
                        <div class="dropdown-content">
                            <a href="#">2560</a>
                            <a href="#">2559</a>

                        </div>
                    </div>
                    <button class="dropbtn">ให้บริการประชาชน</button>

                </div>
            </div>
        </header><!-- /header -->




        <?php
// Application 
        $dir = (isset($_GET['m']) ? $_GET['m'] : 'main');
        $file = (isset($_GET['p']) ? $_GET['p'] : 'dashboard1');

        if (file_exists('modules/' . $dir . '/' . $file . '.php')) {
            include 'modules/' . $dir . '/' . $file . '.php';
        } else {
            echo '404,ไม่พบหน้าที่ท่านเรียก';
        }
        ?>


        <!--  <div class="section-contact-in2">
              <div class="container">
                  <div class="row">

                  </div>
              </div>
          </div>-->
        <div class="footerWrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logoFooter">
                            <p class="logo"><a href=""><img src="img/logo.jpg" alt="เทศบาลตำบลพอกน้อย"></a></p>
                            <p class="text"><a href="15">เทศบาลตำบลพอกน้อย<span>อำเภอพรรณานิคม จังหวัดสกลนคร</span></a></p>
                        </div>
                    </div>
                    <div class="col-sm-8 copyright">

                        แสดงผลได้ดีใน <a class="_blank" style="color:red" href="https://www.mozilla.org/th/firefox/new/?gclid=CjwKEAjww_a8BRDB-O-OqZb_vRASJAA9yrc5tHYaVq1RnmMknAHY9hIRefb1Dnpk4HlkB5I8mRAj6xoCl3jw_wcB" target="_blank">Firefox</a>, <a style="color:#d6c000" class="_blank" href="https://www.google.com/intl/th/chrome/browser/" target="_blank">Chrome</a> และ  <span>Internet Explorer 9</span> ขึ้นไป | <span class="txtautosize"></span>
                        <div class="text-right"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once 'modal.php'; ?>

        <script src="script/jquery/jquery-3.2.1.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">

            $('.carousel').carousel();
        </script>

    </body>
</html>
