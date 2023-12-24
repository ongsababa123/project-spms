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
                                <?php if ($data_project != null) :?>
                            <button type="button" class="btn btn-xs btn-dark" data-toggle="modal"
                                data-target="#modal-default" onclick="load_modal(1)">เพิ่มการสอบ</button>
                                <?php endif; ?>
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
                                        <?php if ($i != 12): ?>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?= $i ?>:00 -
                                                <?= ($i + 1) ?>:00
                                            </td>
                                        <?php endif; ?>
                                        <?php
                                        // Loop for each day
                                        foreach ($dayNames as $day):
                                            ?>
                                            <?php
                                            $projects = [];
                                            $teachers = [];
                                            // Check for projects
                                            foreach ($data_project as $key => $value):
                                                if ($value['data_timelist_project'] != null):
                                                    foreach ($value['data_timelist_project'] as $key2 => $value2):
                                                        $date_ = $value2['date_'];
                                                        $time_ = $value2['time_number'];
                                                        $temp_date = $date_ . ',' . $time_;
                                                        $day_temp = $day . ',' . $i;
                                                        if ($temp_date == $day_temp):
                                                            $projects[] = $value['name_project_th'];
                                                        endif;
                                                    endforeach;
                                                endif;
                                            endforeach;

                                            // Check for teachers
                                            foreach ($teacher_data as $key => $value):
                                                if ($value['data_timelist_teacher'] != null):
                                                    foreach ($value['data_timelist_teacher'] as $key2 => $value2):
                                                        $date_ = $value2['date_'];
                                                        $time_ = $value2['time_number'];
                                                        $temp_date = $date_ . ',' . $time_;
                                                        $day_temp = $day . ',' . $i;
                                                        if ($temp_date == $day_temp):
                                                            $teachers[] = $value['name_user'];
                                                        endif;
                                                    endforeach;
                                                endif;
                                            endforeach;
                                            ?>
                                            <?php if (empty($projects) && empty($teachers)): ?>
                                                <?php if ($i != 12): ?>
                                                    <td class="text-center bg-light">
                                                        <p></p>
                                                    </td>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <td class="text-center bg-olive">
                                                    <?php foreach ($projects as $project): ?>
                                                        <p class=""><strong>โครงการ:</strong>
                                                            <?= $project; ?>
                                                        </p>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($teachers as $teacher): ?>
                                                        <p class=""><strong>อาจารย์:</strong>
                                                            <?= $teacher; ?>
                                                        </p>
                                                    <?php endforeach; ?>

                                                </td>
                                            <?php endif; ?>

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
        var data_project = <?php echo json_encode($data_project); ?>;
        var teacher_data = <?php echo json_encode($teacher_data); ?>;
        function load_modal(load_check, data_encode) {
            create_test = document.getElementById("create_test");
            create_test.style.display = "block";

            if (load_check == 1) {
                data_project.forEach(element => {
                    var newOption = $('<option></option>').val(element.id_project).text(element.name_project_th);
                    $(".modal-body #project_select").append(newOption);
                });
                document.getElementById('name_teacher_3').value = data_project[0]['data_teacher']['name_user'] + " " + data_project[0]['data_teacher']['lastname_user'];
            }
        }
    </script>
    <script>

        console.log(data_project);
        console.log(teacher_data);
    </script>