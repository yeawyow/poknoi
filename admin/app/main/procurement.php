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
<!-- /.row -->
<div class="row">
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
            <div class="box-body table-responsive no-padding">
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
                    <?php
                    $_GET['page'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
                    $pages = 5;
                    $total_rows = $Db->num_rows_qurery('', 'procurement');
                    $page_sum = ceil($total_rows / $pages);
                    $_GET['page'] = ($_POST['page'] == 'last') ? $page_sum : $_GET['page'];
                    $line = (($_GET['page']) - 1) * $pages;

                    $query = 'SELECT * FROM procurement ORDER BY procur_id DESC' . " limit $line,$pages";

                    $sql = $Db->query($query, '');

                    foreach ($sql as $row) {
                        ?>
                        <tr>
                            <td><?= $row['procur_id']; ?></td>
                            <td><?= $row['procur_title']; ?></td>
                            <td><?php echo DateThai($row['procur_date'])  ?></td>
                            <td><a href="modules/upload/pdf/<?php echo $row['procur_pdf'] ?>" target="_blank"><h4><i class="fa fa-cloud-download fa-1x" aria-hidden="true"></i></h4></a></td>
                            <td></td>
                            <td><i class="fa fa-edit fa-2x" aria-hidden="true"></i></td>
                            <td><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="row text-center">
                <ul class="pagination">
                    <?php
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


