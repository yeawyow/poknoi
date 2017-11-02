
    <div class="row">
        <div class="col-md-12" style="align-content:  center;">
            <?php
            $sql = $Db->where('id', $_GET['id']);
            $sql = $Db->query('', 'announce_file');
            foreach ($sql as $row) {
                ?>

                <div class="col-md-12">  <h3><?php echo $row['topic'] ?></h3> </div>       
          

  <div id="example1">
                    ไม่ได้ติดตั้งโปรแกรม Adobe Reader หรือบราวเซอร์ไม่รองรับการแสดงผล PDF 
                    <a href="modules/upload/announce_file/<?php echo $row['file'] ?>">คลิกที่นี้เพื่อดาวน์โหลดไฟล์ PDF</a>
                </div>

                <script>
            var pdfname= '<?php echo $row['file'] ?>' ;      

                    PDFObject.embed('modules/upload/announce_file/'+ pdfname +" ' ", "#example1", {width: "100%", height: "700px"});


                </script>
   
            <?php } ?>


        </div>
    </div>
  
