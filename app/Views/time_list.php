<title>เลือกช่วงเวลา</title>
<link rel="stylesheet" href="<?= base_url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>เลือกช่วงเวลาที่ว่าง</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">เลือกช่วงเวลา</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-navy shadow">
                    <div class="card-header">
                        <h3 class="card-title">ตารางช่วงเวลาที่ว่าง</h3>
                        <div class="card-tools">

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 130px" class="text-center" rowspan="2">ช่วงเวลา</th>
                                    <th style="width: 130px" class="text-center" colspan="5">วัน</th>
                                </tr>
                                <tr>
                                    <th style="width: 130px" class="text-center">จันทร์</th>
                                    <th style="width: 130px" class="text-center">อังคาร</th>
                                    <th style="width: 130px" class="text-center">พุธ</th>
                                    <th style="width: 130px" class="text-center">พฤหัสบดี</th>
                                    <th style="width: 130px" class="text-center">ศุกร์</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Array of day names
                                $dayNames = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

                                // Loop for each hour
                                for ($i = 9; $i <= 16; $i++):
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $i ?>:00 -
                                            <?= ($i + 1) ?>:00
                                        </td>
                                        <?php
                                        // Loop for each day
                                        foreach ($dayNames as $day):
                                            ?>
                                            <td class="text-center">
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="<?= $day . $i ?>">
                                                    <label for="<?= $day . $i ?>"></label>
                                                </div>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix" id="footer_btn_save">
                        <button type="button" class="btn btn btn-success">บันทึก</button>
                        <button type="button" class="btn btn btn-danger" id="cancel" name="cancel">ยกเลิก</button>
                    </div>
                    <div class="card-footer clearfix" id="footer_btn_edit">
                        <button type="button" class="btn btn btn-info">แก้ไขข้อมูล</button>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function () {
            $("#footer_btn_save").hide();
            $("input[type='checkbox']").prop("disabled", true);
        })
        $("#footer_btn_edit").on("click", function () {
            $("#footer_btn_save").show();
            $("#footer_btn_edit").hide();
            $("input[type='checkbox']").prop("disabled", false);
        })
        $("#cancel").on("click", function () {
            $("#footer_btn_save").hide();
            $("#footer_btn_edit").show();
            $("input[type='checkbox']").prop("disabled", true);
        })
    </script>