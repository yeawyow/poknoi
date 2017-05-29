
<div class="container">
    <div class="highlightSlider  ">

        <div class="sliderItem">
            <div class="slider " >
              <div class="flex-container">
    <div class="flexslider">
        <ul class="slides">
               <?php
                    $sql = $Db->query('SELECT *  FROM announce  order by id desc limit 4', '');
                    foreach ($sql as $row) {
                        ?>
            <li>
                <a href="?app=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>"><img src="img/slider/<?php echo $row['image']?>" /></a>
                <?php echo $row['content2'];?>
                
            </li>
                    <?PHP } ?>
          
        </ul>
    </div>
</div>
         </div>
            <div class="ceo-box" >
                <img src="img/ceo.jpg">
                <br>
                <label>นายประจักษ์ ทองวงษา</label>
                <br>
                <label>นายกเทศมนตรีเทศบาลตำบลพอกน้อย</label>
            </div>
        </div>

    </div> 
</div>
<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <div id="tab1" class="tab_content active">
            <div id="slick_news" class="highlight_slick_news slick_news">

                <div class="htmlcontent" data-index="0">
                    <ul>
                           <?php
                    $sql = $Db->query('SELECT *  FROM announce  order by id desc limit 4', '');
                    foreach ($sql as $row) {
                        ?>
                        <li class="col-sm-4 boxdata" title="<?php echo $row['topic']; ?>">
                            <a class="imagefill _blank"><img src="img/slider/<?php echo $row['image']?>" alt="<?php echo $row['topic']; ?>"></a>
                            <a class="txtautosize linksubject _blank" href="?app=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>"><?php echo $row['content2'];?>...</a>
                            <p class="countshare"><span class="fa fa-eye"></span> 80  ครั้ง</p>
                            <a class="linkreadmore _blank" href="?m=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>">อ่านต่อ</a>
                        </li>
                       <?PHP } ?>

                    </ul>
                </div>
            </div>
            <p class="clearfix text-right"><a class="btn btn-primary _blank" href="">ดูทั้งหมด <span class="glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
       <div id="slick_news" class="highlight_slick_news slick_news">

                <div class="htmlcontent" data-index="0">
                    <ul>
                           <?php
                    $sql = $Db->query('SELECT * FROM procurement ORDER BY procur_id DESC limit 6  ', '');
                    foreach ($sql as $row) {
                        ?>
                        <li class="col-sm-4 boxdata" title="<?php echo $row['topic']; ?>">
                            <a class="imagefill _blank"><img src="img/slider/<?php echo $row['image']?>" alt="<?php echo $row['topic']; ?>"></a>
                            <a class="txtautosize linksubject _blank" href="?app=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>"><?php echo $row['content2'];?>...</a>
                            <p class="countshare"><span class="fa fa-eye"></span> 80  ครั้ง</p>
                            <a class="linkreadmore _blank" href="?m=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>">อ่านต่อ</a>
                        </li>
                       <?PHP } ?>

                    </ul>
                </div>
            </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
<h2></h2>
<div class="container"> 
    <div class="clearfix"></div>
    <ul class="tabs">
        <li class="active " data-rel="tab1"><span>ข่าวประชาสัมพันธ์</span></li>
        <li data-rel="tab2"><span>ข่าวจัดซื้อจัดจ้าง</span></li>
        <li data-rel="tab3"><span>ภาพข่าวและกิจกรรม</span></li>
        <li data-rel="tab4"><span>วิดีโอ</span></li>
        <li data-rel="tab6"><span>ประกาศรับสมัครงาน</span></li>
    </ul>
    <div class="tab_container lazyItem">
        <h3 class="d_active tab_drawer_heading" data-rel="tab1"><span>ข่าวประชาสัมพันธ์</span></h3>
        <div id="tab1" class="tab_content active">
            <div id="slick_news" class="highlight_slick_news slick_news">

                <div class="htmlcontent" data-index="0">
                    <ul>
                           <?php
                    $sql = $Db->query('SELECT *  FROM announce  order by id desc limit 4', '');
                    foreach ($sql as $row) {
                        ?>
                        <li class="col-sm-4 boxdata" title="<?php echo $row['topic']; ?>">
                            <a class="imagefill _blank"><img src="img/slider/<?php echo $row['image']?>" alt="<?php echo $row['topic']; ?>"></a>
                            <a class="txtautosize linksubject _blank" href="?app=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>"><?php echo $row['content2'];?>...</a>
                            <p class="countshare"><span class="fa fa-eye"></span> 80  ครั้ง</p>
                            <a class="linkreadmore _blank" href="?m=main&p=announce_content&id=<?php echo $row['id'] ?>&topic=<?php echo $row['topic'] ?>">อ่านต่อ</a>
                        </li>
                       <?PHP } ?>

                    </ul>
                </div>
            </div>
            <p class="clearfix text-right"><a class="btn btn-primary _blank" href="">ดูทั้งหมด <span class="glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- #tab1 -->
        <h3 class="tab_drawer_heading" data-rel="tab2"><span>ข่าวประกวดราคา</span></h3>
        <div id="tab2" class="tab_content">
            <div id="slick_news2" class="highlight_slick_news slick_news">
                <div class="htmlcontent" data-index="0">
                    <ul>
                          <?php
                    $sql = $Db->query('SELECT * FROM procurement ORDER BY procur_id DESC limit 6  ', '');
                    foreach ($sql as $row) {
                        ?>
                        <li class="col-sm-4 boxdata" title="<?php echo $row['procur_title'] ?>">
                            <a class="imagefill _blank"><img src="" alt="<?php echo $row['procur_title'] ?>"></a>
                            <a class="txtautosize linksubject _blank" href=""><?php echo $row['procur_title'] ?></a>
                            <p class="countshare"><span class="fa fa-eye"></span> 292 ครั้ง</p>
                            <a class="linkreadmore _blank" href="">DOWNLOAD</a>
                        </li>
                      <?php } ?>
                    </ul>
                </div>

            </div>
            <p class="clearfix text-right"><a class="btn btn-primary _blank" href="">ดูทั้งหมด <span class="glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- #tab2 -->
        <h3 class="tab_drawer_heading" data-rel="tab4"><span>ภาพข่าวและกิจกรรม</span></h3>
        <div id="tab3" class="tab_content">
            <div id="slick_photo" class="highlight_slick_news">
                <div>
                    <ul class="photobox">


                    </ul>
                </div>

            </div>
            <div class="clearfix mg-t-10"></div>
            <p class="clearfix text-right"><a class="btn btn-primary _blank" href="">ดูทั้งหมด <span class="glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- #tab3 -->
        <h3 class="tab_drawer_heading" data-rel="tab5"><span>คลังวิดีโอ</span></h3>
        <div id="tab4" class="tab_content">
            <div class="boxvdoplayer">
                <div class="col-sm-7 col-md-8">
                    <a class="imagefill hilihgtFrist _blank" href="" title="">
                        <img src="" alt="">
                        <span class="vdoicon"></span>
                        <div class="boxinfo">
                            <div class="info">
                                <p class="subject"></p>
                                <p class="countshare"><span class="fa fa-eye"></span> 1382 ครั้ง</p>
                                <p class="linkreadmore">อ่านเพิ่มเติม >></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-5 col-md-4" id="vdoplaylist">
                    <ul>
                        <!--    <li class="">
                                <a href="" class="imagefill _blank"><span class="vdoicon"></span><img src="https://www.dlt.go.th/130x130/web-upload/m_media/175/file_dafd79d6af79840d1411e7e6a3d1f606.jpg" alt="โครงการประกวดหนังสั้นของกรมขนส่งทางบก ปี 2556 เรื่อง &quot;สนามเด็กเล่น&quot;"></a>
                                <div class="subject">
                                    <a class="mg-b-5 txtautosize" href="">โครงการประกวดหนังสั้นของกรมขนส่งทางบก ปี 2556 เรื่...</a>
                                    <span class="fa fa-eye"></span> 390 ครั้ง                  </div>
                                <div class="clearfix"></div>
                            </li>
                        -->
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix mg-t-10"></div>
            <p class="clearfix text-right"><a class="btn btn-primary _blank" href="">ดูทั้งหมด <span class="glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- #tab4 -->
        <h3 class="tab_drawer_heading" data-rel="tab4">ประกาศรับสมัครงาน</h3>
        <div id="tab6" class="tab_content">
            <div id="slick_job" class="highlight_slick_news">
                <div class="bgjob">
                    <img class="col-sm-4" src="" alt="dlt">
                    <div class="col-sm-3 category">
                        <table>

                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- #tab6 --> 
    </div>
</div>
<div class="clearfix"></div>

