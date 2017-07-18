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
                <form role="form"  id="procurFrm" name="procurFrm" method="POST">
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
                            <input type="file" name="procur_pdf" id="procur_pdf">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <input type="hidden" name="action" id="action" value="add">
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="button" name="addbtn" id="addbtn"  class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">รายการข่าวประกวดราคา</h3>
                </div>
                <div class="box-body">
                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                    <br>
                    <input class="form-control" type="text" placeholder="Default input">
                    <br>
                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                </div>
                <!-- /.box-body -->
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
            $("#addbtn").click(function () {
                $.ajax({
                    type: "POST",
                    url: "app/query/procurement_insert.php",
                    data:$("#procurFrm").serialize(),
success:function(data){
  console.log(data);
    
}
                });
            });
        </script>