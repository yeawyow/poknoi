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
                <form role="form"  id="UserFrm" name="procurFrm" method="POST">
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
                                <option  value="">--เลือกระดับผู้ใช้งาน--</option>
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
                        <button type="button" class="btn btn-warning hidden btn-edit" onClick="dataList.editData($('#form_user').serializeArray())" >Edit User</button>
                        <button type="button"  class="btn btn-primary btn-add">Add User</button>
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

                        var dataList = {}

                        $(function () {
                            dataList.getItem = function (chk_user_id) {
                                return $.post("app/query/sys_user_Query.php", {
                                    action: "item",
                                    chk_user_id: chk_user_id
                                }, function (response) {
                                    if (response != null) {
                                        return response;
                                    }
                                    return response;
                                });
                            }
                            dataList.delItem = function (del_user_id) {
                                if (confirm("Confirm delete this item?")) {
                                    $.post("jsondata.php", {
                                        action: "delete",
                                        del_user_id: del_user_id
                                    }, function (response) {
                                        if (response != null) {
                                            if (response[0].error != null || response[0].success != null) {
                                                var statusText = (response[0].error != null) ? response[0].error : response[0].success;
                                                alert(statusText);
                                            }
                                            if (response[0].success != null) {
                                                var indexObj = $(".pagination").find("li.active").index();
                                                var numDelete = $(".btn-delete").length;
                                                if (indexObj > 1 && numDelete > 1) {
                                                    dataList.getList(indexObj - 1, null);
                                                } else {
                                                    dataList.getList(0, true);
                                                }
                                            }
                                        }
                                    });
                                }
                            }
                            dataList.editData = function (dataSend) {
                                dataSend.push({
                                    name: "action",
                                    value: "edit"
                                });
                                $.post("jsondata.php", dataSend, function (response) {
                                    console.log(response);
                                    if (response != null) {
                                        if (response[0].error != null || response[0].success != null) {
                                            var statusText = (response[0].error != null) ? response[0].error : response[0].success;
                                            $('#exampleModal').modal('toggle')
//					alert(statusText);					
                                        }
                                        if (response[0].success != null) {
                                            var indexObj = $(".pagination").find("li.active").index();
                                            if (indexObj > 0) {
                                                dataList.getList(indexObj - 1, null);
                                            }
                                        }
                                    }
                                });
                            }
                            dataList.addData = function () {


                            }
                            dataList.getList = function (s_page, show_page) {
                                var haveData = null;
                                $.post("app/query/sys_user_Query.php", {
                                    action: 'list',
                                    page: s_page
                                }, function (response) {
                                    if (response != null && response.data.length > 0) {
                                        $(".pagination").removeClass("hidden");
                                        $(".show-list-data").removeClass("hidden");
                                        var rowData = $(".list-data").clone(true);
                                        $(".show-list-data").html("");
                                        var rowListData = "";
                                        $.each(response.data, function (i, v) {
                                            rowListData = "";
                                            rowListData += "<tr class=\"list-data\">";
                                            rowListData += $(rowData.find("td:eq(0)").text(response.data[i].item_id).end()
                                                    .find("td:eq(1)").text(response.data[i].fullname).end()
                                                    .find("td:eq(2)").text(response.data[i].username).end()
                                                    .find("td:eq(3)").text(response.data[i].id_user).end()
                                                    .find("td:eq(4) > button").attr("data-user-id", response.data[i].id_user).end()
                                                    .find("td:eq(5) > button").attr("data-user-id", response.data[i].id_user).end()).html();
                                            rowListData += "</tr>";
                                            $(".show-list-data").append(rowListData);

                                        }); // end loop				

                                        $(".btn-delete").on("click", function () {
                                            var del_user_id = $(this).data('user-id') // 
                                            dataList.delItem(del_user_id);
                                        });
                                        $(".btn-update").on("click", function () {
                                            
                                            var chk_user_id = $(this).data('user-id')

                                            if (chk_user_id != null) {
                                                var usefrm = $('form#UserFrm');
                                                
                                                dataList.getItem(chk_user_id).done(function (res) {
                                                   if(res != null && res.data.length > 0){
                                                               
					
					console.log(res);
					  usefrm.find("#fname").val(res.data[0].fname);
                                          usefrm.find("#lname").val(res.data[0].lname);
                                          usefrm.find('#type_user option[value='+res.data[0].type_user_id+']').attr('selected','selected');
                                         usefrm.find(":selected").val(res.data[0].type_user_id);
					usefrm.find(".btn-add").addClass("hidden");
					usefrm.find(".btn-edit").removeClass("hidden");		  
				} 
                                                });
                                            }
                                        });
                                        if (show_page == true) {
                                            $(".pagination").find("li:first").unbind("click");
                                            $(".pagination").find("li:last").unbind("click");
                                            var rowPage = $('<li><a href="javascript:void(0);"></a></li>');
                                            $(".pagination").find("li:not(:first):not(:last)").remove();
                                            $(".pagination").find("li").removeClass("active");
                                            var rowListPage = "";
                                            for (i = 1; i <= response.allpage; i++) {
                                                rowListPage += "<li>";
                                                rowListPage += $(rowPage.find("a").text(i).end()
                                                        .find("a").attr("href", "javascript:dataList.getList('" + (i - 1) + "',null)").end()).html();
                                                rowListPage += "</li>";
                                                if (i == response.allpage && rowListPage != "") {
                                                    $(".pagination").find("li:eq(0)").after(rowListPage);
                                                    $(".pagination").find("li:eq(1)").addClass("active");
                                                    $(".pagination").find("li:not(':first'):not(':last')").on("click", function () {
                                                        $(".pagination").find("li").removeClass("active");
                                                        $(this).addClass("active");
                                                    });
                                                    $(".pagination").find("li:first").on("click", function () {
                                                        var indexObj = $(".pagination").find("li.active").prev("li").index();
                                                        if (indexObj > 0) {
                                                            $(".pagination").find("li.active").prev("li").triggerHandler("click");
                                                            dataList.getList(indexObj - 1, null);
                                                        }
                                                    });
                                                    $(".pagination").find("li:last").on("click", function () {
                                                        var indexObj = $(".pagination").find("li.active").next("li").index();
                                                        if (indexObj <= response.allpage) {
                                                            $(".pagination").find("li.active").next("li").triggerHandler("click");
                                                            dataList.getList(indexObj - 1, null);
                                                        }
                                                    });
                                                }
                                            }
                                        }
                                    }

                                });
                                if (haveData == null) {
                                    $(".show-list-data").addClass("hidden");
                                    $(".pagination").addClass("hidden");
                                }
                            }
                            dataList.getList(0, true);




                        });



                        $("#adduserbtn").click(function () {

                        });

                    </script>