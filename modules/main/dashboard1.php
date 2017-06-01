<!-- Inspired by https://codepen.io/transportedman/pen/NPWRGq -->

<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <img class="item active" src="img/slider/1475992804.jpg">
        <img class="item" src="img/slider/1478096033.jpg">

    </div>
</div>

<!-- Remeber to put all the content you want on top of the slider below the slider code -->

<!--<div class="title">
  <h1>This is Awesome</h1>
</div>-->

<div class="container">
    <div class="row">
        <h2>ประวัติความเป็นมา : <span style="color:#00733e" >เทศบาลตำบลพอกน้อย</span></h2>
        เทศบาลตำบลพอกน้อย เป็นองค์กรปกครองส่วนท้องถิ่นรูปแบบหนึ่ง เปลี่ยนแปลงจากสภาตำบล เป็นองค์การบริหารส่วนตำบลพอกน้อย เมื่อวันที่ 23 กุมภาพันธ์ 2540 ตามประกาศกระทรวงมหาดไทยลงวันที่ 16 ธันวาคม 2539 และยกฐานะเป็นเทศบาลตำบลเมื่อวันที่ 12 ตุลาคม 2552 ตามประกาศกระทรวงมหาดไทยลงวันที่ 12 ตุลาคม 2552 มีสำนักงานตั้งอยู่ที่บ้านพอกน้อยพัฒนา หมู่ที่ 8 ตำบลพอกน้อย อำเภอพรรณานิคม จังหวัดสกลนคร 
        ปัจจุบันเทศบาลตำบลพอกน้อย ตั้งอยู่ที่ ถ.นิตโย ต.พอกน้อย อ.พรรณานิคม จ.สกลนคร โดยห่างจากตัวจังหวัดสกลนครไปทางทิศตะวันตก ประมาณ 25 ก.ม
    </div>
</div>
<h2></h2>
<div class="container">
    <div class="row">
        <h2>ข่าวประชาสัมพันธ์และข่าวกิจกรรม</h2>

        <?php
        $sql = $Db->query('SELECT *  FROM announce  order by id desc limit 4', '');
        foreach ($sql as $row) {
            ?>

            <div class="col-md-3">
                <div class="news">
                    <a class="gallery-sec fancybox"   href="?app=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>">		
                        <div class="image-hover img-layer-slide-left-right">
                            <img src="img/announce/<?php echo $row['image'] ?>" alt="<?php echo $row['topic']; ?>">
                        </div>

                        <div class="detail" style="height:107px; font-weight:lighter; color:#1F1F1F;"  >
                            <p style="font-size:14px;">
                                <?php echo $row['topic']; ?></p>
                        </div>
                    </a>
                </div>
            </div>

        <?php } ?>
    </div>
    <div class="col-12 detail" align="right" style="margin-bottom:5px;"><a href="allpurchase.php"  >รายการทั้งหมด </a> </div> 
</div>
<h2></h2>
<div class="container">
    <div class="row">

        <!-- Nav tabs --><div class="card">
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ข่าวประกวดราคา</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="profile">
                    <div class="row" >
                        <div class="col-md-12">

                            <table width="100%" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
                                <td width="20%" align="center" bgcolor="#4DB10A"><span class="style1">ไฟล์</span></td>
                                <td width="13%" align="center" bgcolor="#4DB10A"><span class="style1">หัวข้อ</span></td>
                                <td width="12%" align="center" bgcolor="#4DB10A" ><span class="style1">วันที่</span></td>
                                <td width="100%" align="center" bgcolor="#4DB10A" ><span class="style1">ดาวน์โหลด</span></td>
                                <?php
                                $sql = $Db->query('SELECT * FROM procurement ORDER BY procur_id DESC limit 10  ', '');
                                foreach ($sql as $row) {
                                    ?>
                                    <tr>
                                        <td width="20%" height="50px" align="center" bgcolor='#EBF9FA'>
                                            <H3><div style="color:#F00">
                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> </div>
                                            </H3>           </td>
                                        <td width="47%" align="left" bgcolor='#EBF9FA'><a href="count.php?id=879" style=" color:#333"><?php echo $row['procur_title'] ?></a> 
                                        </td>
                                        <td width="20%"  align="center" bgcolor='#EBF9FA'><?php echo $row['procur_date'] ?></td>
                                        <td width="32px" align="center" bgcolor='#EBF9FA'><a href="count.php?id=879"><h4><i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i></h4></a></td>

                                    </tr>

                                <?php } ?>
                            </table>
                            <div class="detail" align="right" style="margin-bottom:5px;"><a href="allpurchase.php"  >รายการทั้งหมด </a> </div>  
                        </div>	


                    </div>
                </div>
            </div>
        </div>

    </div>

</div>






