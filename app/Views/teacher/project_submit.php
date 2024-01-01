<title>การยืนยันตอบรับโครงงานพิเศษ</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>การยืนยันตอบรับโครงงานพิเศษ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">การยืนยันตอบรับโครงงานพิเศษ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-info card-tabs">
                            <div class="card-body">
                                <?php $count = 0; ?>
                                <?php foreach ($data_project as $key => $value): ?>
                                    <?php if ($value['data_tk01'] != null): ?>
                                        <?php $count++; ?>
                                        <div class="card card-navy">
                                            <div class="card-header">
                                                <h3 class="card-title">ชื่อโครงงานพิเศษ :
                                                    <?= $value['name_project_th'] ?>
                                                </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                                                <div class="row">
                                                    <?php $count = 0; ?>
                                                    <?php foreach ($value['data_student'] as $index => $value_student): ?>
                                                        <?php $count++; ?>
                                                        <div class="col-3">
                                                            <label>นักศึกษาคนที่
                                                                <?= $index + 1 ?>
                                                            </label>
                                                            <h6>
                                                                <?= $value_student['name_user'] . ' ' . $value_student['lastname_user'] ?>
                                                            </h6>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <?php if ($count == 1): ?>
                                                        <div class="col-3">
                                                            <label>นักศึกษาคนที่
                                                                <?= $count ?>
                                                            </label>
                                                            <h6>
                                                                ไม่มี
                                                            </h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <label>นักศึกษาคนที่
                                                                <?= $count + 1 ?>
                                                            </label>
                                                            <h6>
                                                                ไม่มี
                                                            </h6>
                                                        </div>
                                                    <?php elseif ($count == 2): ?>
                                                        <div class="col-3">
                                                            <label>นักศึกษาคนที่
                                                                <?= $count + 1 ?>
                                                            </label>
                                                            <h6>
                                                                ไม่มี
                                                            </h6>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="col-2">
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="btn btn-app bg-danger" data-toggle="modal"
                                                            data-target="#modal-default"
                                                            onclick="load_modal(2 , '<?= $key ?>')">
                                                            <i class="fas fa-file-pdf"></i> เอกสาร
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-4">
                                                    </div>
                                                    <div class="col-1">
                                                        <button type="button" class="btn btn-block btn-success btn-sm"
                                                            onclick="confirm_Alert('ต้องการตอบรับโครงงานพิเศษหรือไม่?','<?= $value['data_tk01']['id_tk_01'] ?>/1/6')">
                                                            ตอบรับ</button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn btn-block btn-warning btn-sm"
                                                            onclick="confirm_Alert('ต้องการส่งกลับให้ปรับปรุงหรือไม่?','<?= $value['data_tk01']['id_tk_01'] ?>/1/3')">
                                                            ส่งกลับไปให้ปรับปรุง</button>
                                                    </div>
                                                    <div class="col-1">
                                                        <button type="button" class="btn btn-block btn-danger btn-sm"
                                                            onclick="confirm_Alert('ต้องการปฏิเสธโครงงานพิเศษหรือไม่?','<?= $value['data_tk01']['id_tk_01'] ?>/1/5')">
                                                            ปฏิเสธ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php if ($count == 0): ?>
                                    <div class="card card-navy">
                                        <div class="card-body">
                                            <label class="text-muted">ไม่มีโครงงานพิเศษ</label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal-default">
        <div id="main_tk">
            <?= $this->include("modal/main_tk"); ?>
        </div>
    </div>
    <script>
        var data_project = <?php echo json_encode($data_project); ?>;
    </script>
    <script>
        function load_modal(load_check, data_encode) {
            $(".modal-footer #btn_modal").hide();
            $(".modal-body #select_teacher").empty();
            const fieldsToReset = [
                '#name_project', '#name_project_eng', '#department', '#subject_group',
                '#semester', '#learn_year', '#name_consult_1', '#name_consult_2',
                '#name_student_2', '#lastname_student_2', '#email_student_2', '#phone_student_2', '#room_student_2',
                '#name_student_3', '#lastname_student_3', '#email_student_3', '#phone_student_3', '#room_student_3', '#select_teacher'
            ];
            var newOption = $('<option></option>').val(data_project[data_encode]['data_teacher']['email_user']).text(data_project[data_encode]['data_teacher']['name_user'] + ' ' + data_project[data_encode]['data_teacher']['lastname_user'] + ' ' + '[จำนวนโครงงานพิเศษ : ' + data_project[data_encode]['data_teacher']['project_count'] + ']');
            $(".modal-body #select_teacher").append(newOption);
            $(".modal-body #name_project").val(data_project[data_encode]['name_project_th']);
            $(".modal-body #name_project_eng").val(data_project[data_encode]['name_project_eng']);
            $(".modal-body #department").val(data_project[data_encode]['department']);
            $(".modal-body #subject_group").val(data_project[data_encode]['subject_group']);
            $(".modal-body #semester").val(data_project[data_encode]['term']);
            $(".modal-body #learn_year").val(data_project[data_encode]['year']);
            if (data_project[data_encode]['name_consult'] == null) {
                $(".modal-body #name_consult_1").val('');
                $(".modal-body #name_consult_2").val('');
            } else {
                var consultants = data_project[data_encode]['name_consult'].split(',');
                $(".modal-body #name_consult_1").val(consultants[0]);
                $(".modal-body #name_consult_2").val(consultants[1]);
            }
            for (let index = 1; index < 4; index++) {
                $(".modal-body #name_student_" + index).val('');
                $(".modal-body #lastname_student_" + index).val('');
                $(".modal-body #email_student_" + index).val('');
                $(".modal-body #phone_student_" + index).val('');
                $(".modal-body #room_student_" + index).val('');
            }
            data_project[data_encode]['data_student'].forEach(function (element, key) {
                key++;
                $(".modal-body #name_student_" + key).val(element.name_user);
                $(".modal-body #lastname_student_" + key).val(element.lastname_user);
                $(".modal-body #email_student_" + key).val(element.email_user);
                $(".modal-body #phone_student_" + key).val(element.phone_user);
                $(".modal-body #room_student_" + key).val(element.room_user);
            });
            $(".modal-footer #submit").prop('disabled', true);
            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));

            if (load_check == 2) {
                //edit tk01
                $(".modal-header #title_modal").text('ข้อมูล ทก.01');
                $(".modal-body #tk_01_file_upload").hide();
                $("#tk_01_file_read_btn").click(() => window.open('<?php echo site_url('openfile/') ?>' + data_project[data_encode]['data_tk01']['id_file_01'], '_blank'));
                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            }
        }
    </script>
    <script>
        function confirm_Alert(text, url) {
            Swal.fire({
                title: text,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                confirmButtonText: "submit",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading indicator
                    Swal.showLoading();

                    $.ajax({
                        url: '<?= base_url('/teacher/submitpage/changestatus/tk/') ?>' + url,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        beforeSend: function () {
                            // Code to execute before the request is sent
                        },
                        complete: function () {
                            // Hide loading indicator after the request is complete
                            Swal.hideLoading();
                        }
                    }).done(function (response) {
                        if (response.success) {
                            Swal.fire({
                                title: response.message,
                                icon: 'success',
                                showConfirmButton: false
                            });
                            setTimeout(() => {
                                if (response.reload) {
                                    window.location.reload();
                                }
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: response.message,
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
        }
    </script>