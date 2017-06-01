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
    <div class="col-md-12">
        <div class="row">
            <h2>ประวัติความเป็นมา : เทศบาลตำบลพอกน้อย</h2>
            เทศบาลตำบลพอกน้อย เป็นองค์กรปกครองส่วนท้องถิ่นรูปแบบหนึ่ง เปลี่ยนแปลงจากสภาตำบล เป็นองค์การบริหารส่วนตำบลพอกน้อย เมื่อวันที่ 23 กุมภาพันธ์ 2540 ตามประกาศกระทรวงมหาดไทยลงวันที่ 16 ธันวาคม 2539 และยกฐานะเป็นเทศบาลตำบลเมื่อวันที่ 12 ตุลาคม 2552 ตามประกาศกระทรวงมหาดไทยลงวันที่ 12 ตุลาคม 2552 มีสำนักงานตั้งอยู่ที่บ้านพอกน้อยพัฒนา หมู่ที่ 8 ตำบลพอกน้อย อำเภอพรรณานิคม จังหวัดสกลนคร 
            ปัจจุบันเทศบาลตำบลพอกน้อย ตั้งอยู่ที่ ถ.นิตโย ต.พอกน้อย อ.พรรณานิคม จ.สกลนคร โดยห่างจากตัวจังหวัดสกลนครไปทางทิศตะวันตก ประมาณ 25 ก.ม
        </div>
        <h1></h1>
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
                                       <img src="img/announce/<?php echo $row['image']?>" alt="<?php echo $row['topic']; ?>">
                                    </div>

                                    <div class="detail" style="height:107px; font-weight:lighter; color:#1F1F1F;"  >
                                        <p style="font-size:14px;">
                                         <?php echo $row['content2'];?></p>
                                    </div>
                                </a>
                                  </div>
                            </div>

                    <?php } ?>

        </div>
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
                                    <td width="20%" align="center" bgcolor="#4DB10A"><span class="style1">ประกาศวันที่</span></td>
                                    <td width="13%" align="center" bgcolor="#4DB10A"><span class="style1">ดาวน์โหลด</span></td>
                                    <td width="12%" align="center" bgcolor="#4DB10A" ><span class="style1">จำนวน/ครั้ง</span></td>
                                    </tr>

                                    <tr>
                                        <td width="32px" height="50px" align="center" bgcolor='#EBF9FA'>
                                            <H3><div style="color:#F00">
                                                    <i class='icon-file-pdf'></i> </div>
                                            </H3>           </td>
                                        <td width="47%" align="left" bgcolor='#EBF9FA'><a href="count.php?id=879" style=" color:#333">เผยแพร่รายละเอียดคุณลักษณะเฉพาะเช่าเครื่องเอกซเรย์คอมพิวเตอร์ ขนาดไม่น้อยกว่า ๒ Slices จำนวน ๑ เครื่อง โดยวิธีตกลงราคา รพร.สว่างแดนดิน</a> 
                                        </td>
                                        <td width="20%"  align="center" bgcolor='#EBF9FA'>29 มิถุนายน 2560</td>
                                        <td width="32px" align="center" bgcolor='#EBF9FA'><a href="count.php?id=879"><h4><i class=" icon-download"></i></h4></a></td>
                                        <td width="12%" align="center" bgcolor='#EBF9FA'>4</td>
                                    </tr>


                                </table>
                                <div class="detail" align="right" style="margin-bottom:5px;"><a href="allpurchase.php"  >รายการทั้งหมด </a> </div>  
                            </div>	<tr align="center">
                                <td width="8%" height="35" align="center" bgcolor="#4DB10A" ><span class="style1">ไฟล์</span></td>
                                <td width="47%" align="center" bgcolor="#4DB10A"><span class="style1">หัวข้อดาวน์โหลด</span></td>

                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>
</div>


