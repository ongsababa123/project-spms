<title>จัดตารางสอบ</title>
<link rel="stylesheet" href="<?= base_url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>จัดตารางสอบ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">จัดตารางสอบ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info shadow">
                    <div class="card-header">
                        <h3 class="card-title">ตารางเวลาว่าง อาจารย์และนักศึกษา</h3>
                        <div class="card-tools">
                            <a href="<?= site_url('/officer/historytest'); ?>"
                                class="btn btn-xs btn-primary">ประวัติการสอบ</a>
                            <button type="button" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-default"
                                onclick="load_modal(1)">เพิ่มการสอบ</button>
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
                                                <h6>ชื่อโครงการ : หฟกฟหกฟ</h6>
                                                <h6>ชื่ออาจารย์ : หฟกฟหกฟ</h6>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    </div>
    <div class="modal fade" id="modal-default">
        <div id="create_test">
            <?= $this->include("modal/create_test"); ?>
        </div>
    </div>
    <script>
        function load_modal(load_check, data_encode) {
            create_test = document.getElementById("create_test");
            create_test.style.display = "block";

            if (load_check == 1) {

            }
        }
    </script>