<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        จัดการผู้ใช้งาน
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">จัดการผู้ใช้งาน</li>
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
                    <h3 class="box-title">เพิ่มผู้ใช้งาน</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form"  id="procurFrm" name="procurFrm" method="POST">
                    <div class="box-body">

                        <div class=" form-group col-md-4">
                            <label  for="username">username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="ชือล๊อกอิน">
                        </div>
                        <div class="form-group col-md-4">
                            <label  for="password">password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน">
                        </div>

                        <div class="form-group col-md-4">
                            <label  for="password">ยืนยัน password</label>
                            <input type="password" class="form-control" name="password" id="procur_title" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                        <div class=" form-group col-md-2">
                            <label  for="pname">คำนำหน้า</label>
                            <select class="form-control" name="pname" id="pname">
                                <option value="">--เลือกคำนำหน้า--</option>
                                <?php
                                $result = $Db->query('', 'pname');
                                foreach ($result AS $row) {
                                    ?>

                                    <option value="<?php echo $row['pname_id']; ?>">
                                        <?php echo $row['pname']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label  for="fname">ชื่อ</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="ชื่อ">
                        </div>
                        <div class="form-group col-md-4">
                            <label  for="lname">นามสกุล</label>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="นามสกุล">
                        </div>


                        <div class="form-group col-md-2 ">
                            <label  for="lname">ระดับผู้ใช้งาน</label>
                            <select class="form-control" name="type_user" id="type_user">
                                <option value="">--เลือกระดับผู้ใช้งาน--</option>
                                <?php
                                $result = $Db->query('', 'type_user');
                                foreach ($result AS $row) {
                                    ?>

                                    <option value="<?php echo $row['type_id']; ?>">
                                        <?php echo $row['type_user']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <input type="hidden" name="action" id="action" value="add">
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="button" name="adduserbtn" id="adduserbtn"  class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">รายชื่อ USER</h3>
                </div>
                <div class="box-body">
                    <table id="example" class="table table-bordered">

                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ชื่อ-สกุล</th>
                            <th>username</th>
                            <th>ระดับ</th>
                            <th style="width:50px"></th>

                            <th style="width: 50px"></th>
                        </tr>



                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
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
            <?php // }   ?>
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
                 

                           
                          

                            $("#adduserbtn").click(function () {
                                $.ajax({
                                    type: "POST",
                                    url: "app/query/sys_user_insert.php",
                                    data: $("#procurFrm").serialize(),
                                    success: function (data) {
                                        $("#procurFrm")[0].reset(); // reset form 

                                    }
                                });
                            });
                        
                    </script>