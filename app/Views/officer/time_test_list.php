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
                                class="btn btn-xs btn-dark">ประวัติการสอบ</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px" class="text-center" rowspan="2">วัน</th>
                                    <th style="width: 130px" class="text-center" colspan="8">ช่วงเวลา</th>
                                </tr>
                                <tr>
                                    <?php
                                    // Array of day names
                                    $dayNames = ['จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์'];
                                    $dayNam = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

                                    // Loop for each hour
                                    for ($i = 9; $i <= 16; $i++):
                                        ?>
                                        <?php if ($i != 12): ?>
                                            <th style="width: 130px" class="text-center">
                                                <?= $i ?>:00 -
                                                <?= ($i + 1) ?>:00
                                            </th>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dayNam as $key => $day): ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $dayNames[$key] ?>
                                        </td>
                                        <?php for ($i = 9; $i <= 16; $i++): ?>
                                            <?php
                                            $projects = [];
                                            $teachers = [];
                                            $data_modal = [];
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
                                                            $data_modal['projects'][] = $value['id_project'];
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
                                                            $teachers[] = $value['name_user'] . ' ' . $value['lastname_user'];
                                                            $data_modal['teachers'][] = $value['id_user'];
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
                                                <td class="text-center bg-olive" data-toggle="modal" data-target="#modal-default"
                                                    onclick="load_modal(1, <?= htmlspecialchars(json_encode($data_modal), ENT_QUOTES, 'UTF-8') ?>, '<?= $day ?>', <?= $i ?>)">
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
                                        <?php endfor; ?>
                                    </tr>
                                <?php endforeach; ?>
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
        function load_modal(load_check, data_encode, date, time) {
            create_test = document.getElementById("create_test");
            create_test.style.display = "block";
            $(".modal-body #project_select").empty();
            $(".modal-body #name_teacher_1").empty();
            $(".modal-body #name_teacher_2").empty();

            if (load_check == 1) {
                data_project.forEach(element => {
                    if (data_encode['projects'] != null) {
                        data_encode['projects'].forEach(element2 => {
                            if (element.id_project == element2) {
                                var newOption = $('<option></option>').val(element.id_project).text(element.name_project_th);
                                $(".modal-body #project_select").append(newOption);
                            }
                        });
                        var selectedValue = document.getElementById('project_select').value;
                        var data_project = <?php echo json_encode($data_project); ?>;
                        data_project.forEach(element => {
                            if (element.id_project == selectedValue) {
                                document.getElementById('name_teacher_3').value = element.data_teacher.name_user + ' ' + element.data_teacher.lastname_user;
                            }
                        })
                    } else {
                        $(".modal-body #project_select").prop('disabled', true);
                    }
                });
                $(".modal-body #day_test_value").val(date);
                if (date == "monday") {
                    $(".modal-body #day_test").val("จันทร์");
                } else if (date == "tuesday") {
                    $(".modal-body #day_test").val("อังคาร");
                } else if (date == "wednesday") {
                    $(".modal-body #day_test").val("พุธ");
                } else if (date == "thursday") {
                    $(".modal-body #day_test").val("พฤหัสบดี");
                } else if (date == "friday") {
                    $(".modal-body #day_test").val("ศุกร์");
                }
                $(".modal-body #time_test").val(time + ':00 - ' + (time + 1) + ':00');
                $(".modal-body #time_test_value").val(time);

                var newOption_null_1 = $('<option></option>').val(null).text(null);
                var newOption_null_2 = $('<option></option>').val(null).text(null);
                $(".modal-body #name_teacher_1").append(newOption_null_1);
                $(".modal-body #name_teacher_2").append(newOption_null_2);
                teacher_data.forEach(element => {
                    if (data_encode['teachers'] != null) {
                        data_encode['teachers'].forEach(element2 => {
                            if (element.id_user == element2) {
                                var newOption = $('<option></option>').val(element.email_user).text(element.name_user + ' ' + element.lastname_user);
                                $(".modal-body #name_teacher_1").append(newOption);
                            }
                            if (element.id_user == element2) {
                                var newOption = $('<option></option>').val(element.email_user).text(element.name_user + ' ' + element.lastname_user);
                                $(".modal-body #name_teacher_2").append(newOption);
                            }
                        });
                    } else {
                        $(".modal-body #name_teacher_1").prop('disabled', true);
                        $(".modal-body #name_teacher_2").prop('disabled', true);
                    }
                });
                $(".modal-body #url_route").val("officer/testtime/create");
            }
        }
    </script>
    <script>
        function action_(url, form) {
            var formData = new FormData(document.getElementById(form));
            // Show loading progress
            var loadingIndicator = Swal.fire({
                title: 'กำลังโหลด...',
                allowOutsideClick: false,
                showConfirmButton: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = (evt.loaded / evt.total) * 100;
                            // You can update a progress bar or any other loading indicator here
                        }
                    }, false);
                    return xhr;
                },
                beforeSend: function () {
                    // Show loading indicator
                    loadingIndicator;
                },
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(() => {
                            if (response.reload) {
                                window.location.reload();
                            }
                        }, 2000);
                    } else {
                        // Handle error response
                        handleErrorResponse(response);
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error
                    handleErrorResponse({
                        message: "เกิดข้อผิดพลาด"
                    });
                },
                complete: function () {
                    // Hide loading indicator on completion
                    loadingIndicator.close();
                }
            });
        }

        function handleErrorResponse(response) {
            Swal.fire({
                title: response.message,
                icon: 'error',
                showConfirmButton: true,
                width: '55%'
            });
        } 
    </script>