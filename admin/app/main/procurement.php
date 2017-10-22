<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        ระบบข่าวประกวดราคา
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">รายการข่าวประกวดราคา</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">เพิ่มข่าวประกวดราคา</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
              
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">หัวข้อ</label>
                            <input type="text" class="form-control" name="procur_title" id="procur_title" placeholder="ชื่อหัวข้อ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" name="procur_date" id="procur_date" placeholder="วันที่เพิ่ม">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">เพิ่มไฟล์</label>
                            <input type="file"  name="procur_pdf" id="procur_pdf">

                            <p class="help-block">คอมเมนต์ตรงนี้</p>
                        </div>
                 
                    </div>
                <div class=" box-footer btn btn-danger"  id="bnt">เพิ่ม</div>
                    <!-- /.box-body -->

                
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                      <div class="tagetLayer"></div>
                
                <div id="loader-icon" style="display: none"><img src="images/Loading_icon.gif"></div>
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
          
               
              <!-- Form Element sizes -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">รายการข่าวประกวดราคา</h3>
                </div>
                <div class="box-body">
                    <table id="example" class="table table-bordered">

                        <tr>
                            <th style="width: 10px">#</th>
                            <th>หัวข้อ</th>
                            <th>วันที่</th>
                            <th>ผู้เพิ่มรายการ</th>
                            <th style="width:50px"> <button type="button" data-user-id=""

                                            class="btn btn-sm btn-primary btn-add">เพิ่มรายการ</button></th>

                            <th style="width: 50px"></th>
                        </tr>

                        <tbody class="show-list-data">
                            <tr class="list-data">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="button" data-user-id=""

                                            class="btn btn-sm btn-warning btn-update">Update</button>
                                </td>
                                <td>
                                    <button data-user-id="" type="button" class="btn btn-sm btn-danger btn-delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="javascript:void(0);" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="javascript:void(0);"></a></li>
                        <li>
                            <a href="javascript:void(0);" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- /.box -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<!-- Main content -->
<!-- /.row -->

<!--<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><button class="btn btn-primary">เพิ่มรายการ</button></h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
<!-- /.box-header -->
<!--    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>หัวข้อ</th>
                <th>วันที่</th>
                <th>ดาวน์โหลด</th>
                <th>ผู้โพส</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
<?php /*
  $_GET['page'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
  $pages = 5;
  $total_rows = $Db->num_rows_qurery('', 'procurement');
  $page_sum = ceil($total_rows / $pages);
  $_GET['page'] = ($_POST['page'] == 'last') ? $page_sum : $_GET['page'];
  $line = (($_GET['page']) - 1) * $pages;

  $query = 'SELECT * FROM procurement ORDER BY procur_id DESC' . " limit $line,$pages";

  $sql = $Db->query($query, '');

  foreach ($sql as $row) { */
?>
                <tr>
                    <td><?= $row['procur_id']; ?></td>
                    <td><?= $row['procur_title']; ?></td>
                    <td><?php echo DateThai($row['procur_date']) ?></td>
                    <td><a href="modules/upload/pdf/<?php echo $row['procur_pdf'] ?>" target="_blank"><h4><i class="fa fa-cloud-download fa-1x" aria-hidden="true"></i></h4></a></td>
                    <td></td>
                    <td><i class="fa fa-edit fa-2x" aria-hidden="true"></i></td>
                    <td><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
                </tr>
<?php // } ?>
        </table>
    </div>
<!-- /.box-body -->
<div class="row text-center">
    <ul class="pagination">
        <?php /*
          if ($_GET['page'] > 1) {
          $back = $_GET['page'] - 1;
          ?>
          <li> <?php echo "<a href=$PHP_SELF?file=procurement&page=1>หน้าแรก</a>"; ?></li>

          <li><?php echo "<a href=$PHP_SELF?file=procurement&page=" . $back . "> หน้าก่อน </a>"; ?></li>
          <?php }
          ?>
          <?php
          for ($a = 1; $a <= $page_sum; $a++) {
          if ($a == $_GET['pege']) {
          echo "[$a]";
          } else {
          ?>
          <li> <?php echo "<a href=$PHP_SELF?file=$_GET[file]&page=$a>$a</a>"; ?></li>
          <?php
          }
          }
          ?>
          <?php
          if ($_GET['page'] < $page_sum) {
          $next = $_GET['page'] + 1;
          ?>
          <li><?php echo "<a href=$PHP_SELF?file=$_GET[file]&page=" . $next . "> ถัดไป </a>"; ?></li>
          <li><?php echo "<a href=$PHPSELF?file=$_GET[file]&page=" . $page_sum . "> สุดท้าย </a>"; ?></li>
          <?php
          }
          ?>
          </ul>
          </div>
          </div>
          <!-- /.box -->
          </div>
          </div>


         */
        ?>
        <script type="text/javascript">
          
               $("#bnt").click(function(){
                
                      $.post("app/query/procurement_insert.php",{procur_title:$("#procur_title").val(),procur_date:$("#procur_date").val(),procur_pdf:$("#procur_pdf").val()},
                      function(data){
                        console.log(data);
                      });
               });
               
           
      
        </script>