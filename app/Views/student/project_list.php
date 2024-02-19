<title>โครงงานพิเศษทั้งหมด</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>โครงงานพิเศษทั้งหมด</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">โครงงานพิเศษทั้งหมด</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-navy shadow">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <div class="card-tools">
                            <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-default"
                                onclick="load_modal(1)">
                                <i class="fas fa-plus-square"></i> เพิ่มโครงงานพิเศษพิเศษ (ทก.01)
                            </a>
                            <a class="btn btn-app bg-danger" onclick="cancel_project()">
                                <i class="fas fa-window-close"></i> ยกเลิกโครงงานพิเศษ
                            </a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                    <th>ชื่อโครงงานพิเศษ</th>
                                    <th class="text-center">ทก.01</th>
                                    <th class="text-center">ทก.02</th>
                                    <th class="text-center">ทก.03</th>
                                    <th class="text-center">ทก.04</th>
                                    <th class="text-center">ทก.05</th>
                                    <th class="text-center">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
        $(document).ready(function () {
            getTableData();
        });
    </script>
    <script>
        function load_modal(load_check, data_encode) {
            $(".modal-body #submit_btn_teacher").hide();
            var data_teacher = <?php echo json_encode($data_teacher); ?>;
            main_tk = document.getElementById("main_tk");
            $(".modal-body #select_teacher").empty();
            $(".modal-body #tk_04_file_1").empty();
            main_tk.style.display = "block";
            const fieldsToReset = [
                '#name_project', '#name_project_eng', '#department', '#subject_group',
                '#semester', '#learn_year', '#name_consult_1', '#name_consult_2',
                '#name_student_2', '#lastname_student_2', '#email_student_2', '#phone_student_2', '#room_student_2',
                '#name_student_3', '#lastname_student_3', '#email_student_3', '#phone_student_3', '#room_student_3'
            ];

            if (load_check == 1) {
                //create tk01
                var data_user = <?php echo json_encode($data_user); ?>;
                data_teacher.forEach(element => {
                    var newOption = $('<option></option>').val(element.email_user).text(element.name_user + ' ' + element.lastname_user + ' ' + '[จำนวนโครงงานพิเศษ : ' + element.project_count + ']');
                    $(".modal-body #select_teacher").append(newOption);
                });
                $(".modal-footer #btn_modal").show();
                $(".modal-body #tk_01_file_upload").show();
                $(".modal-body #tk_01_file_read").hide();
                $(".modal-body #name_student_1").val(data_user[0]['name_user']);
                $(".modal-body #lastname_student_1").val(data_user[0]['lastname_user']);
                $(".modal-body #email_student_1").val(data_user[0]['email_user']);
                $(".modal-body #phone_student_1").val(data_user[0]['phone_user']);
                $(".modal-body #room_student_1").val(data_user[0]['room_user']);
                fieldsToReset.forEach(field => $(".modal-body " + field).val(''));
                fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', false));
                $(".modal-body #researched_information").prop('disabled', false);
                $(".modal-body #select_teacher").prop('disabled', false);
                $(".modal-footer #submit").prop('disabled', false);
                $(".modal-header #title_modal").text('ข้อมูล ทก.01');
                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
                $(".modal-body #url_route").val("student/projectlist/create/tk01");
            } else {
                $(".modal-content #overlay").show();
                $.ajax({
                    url: '<?= base_url('student/projectlist/getdata/tk/') ?>' + data_encode,
                    type: "POST",
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (data) {
                        $(".modal-footer #btn_history").prop('href', '<?= base_url('comment/index/') ?>' + data['project']['id_project']);

                        if (data['project']['status_project'] == 2 || data['project']['status_project'] == 0) {
                            $(".modal-footer #btn_modal").hide();
                        } else {
                            $(".modal-footer #btn_modal").show();
                        }
                        $(".modal-content #overlay").hide();
                        $(".modal-body #name_project").val(data['project']['name_project_th']);
                        $(".modal-body #name_project_eng").val(data['project']['name_project_eng']);
                        $(".modal-body #department").val(data['project']['department']);
                        $(".modal-body #subject_group").val(data['project']['subject_group']);
                        $(".modal-body #semester").val(data['project']['term']);
                        $(".modal-body #learn_year").val(data['project']['year']);
                        if (data['project']['name_consult'] == null) {
                            $(".modal-body #name_consult_1").val('');
                            $(".modal-body #name_consult_2").val('');
                        } else {
                            var consultants = data['project']['name_consult'].split(',');
                            $(".modal-body #name_consult_1").val(consultants[0]);
                            $(".modal-body #name_consult_2").val(consultants[1]);
                        }
                        $(".modal-body #name_student_1").val(data['students'][0]['name_user']);
                        $(".modal-body #lastname_student_1").val(data['students'][0]['lastname_user']);
                        $(".modal-body #email_student_1").val(data['students'][0]['email_user']);
                        $(".modal-body #phone_student_1").val(data['students'][0]['phone_user']);
                        $(".modal-body #room_student_1").val(data['students'][0]['room_user']);
                        data_teacher.forEach(element => {
                            var newOption = $('<option></option>').val(element.email_user).text(element.name_user + ' ' + element.lastname_user + ' ' + '[จำนวนโครงงานพิเศษ : ' + element.project_count + ']');
                            if (element.email_user == data['project']['email_teacher']) {
                                $(".modal-body #select_teacher").append(newOption.prop('selected', true));
                            } else {
                                $(".modal-body #select_teacher").append(newOption);
                            }
                        });
                        if (data['students'][1] == null) {
                            $(".modal-body #name_student_2").val('');
                            $(".modal-body #lastname_student_2").val('');
                            $(".modal-body #email_student_2").val('');
                            $(".modal-body #phone_student_2").val('');
                            $(".modal-body #room_student_2").val('');
                        } else {
                            $(".modal-body #name_student_2").val(data['students'][1]['name_user']);
                            $(".modal-body #lastname_student_2").val(data['students'][1]['lastname_user']);
                            $(".modal-body #email_student_2").val(data['students'][1]['email_user']);
                            $(".modal-body #phone_student_2").val(data['students'][1]['phone_user']);
                            $(".modal-body #room_student_2").val(data['students'][1]['room_user']);
                        }

                        if (data['students'][2] == null) {
                            $(".modal-body #name_student_3").val('');
                            $(".modal-body #lastname_student_3").val('');
                            $(".modal-body #email_student_3").val('');
                            $(".modal-body #phone_student_3").val('');
                            $(".modal-body #room_student_3").val('');
                        } else {
                            $(".modal-body #name_student_3").val(data['students'][2]['name_user']);
                            $(".modal-body #lastname_student_3").val(data['students'][2]['lastname_user']);
                            $(".modal-body #email_student_3").val(data['students'][2]['email_user']);
                            $(".modal-body #phone_student_3").val(data['students'][2]['phone_user']);
                            $(".modal-body #room_student_3").val(data['students'][2]['room_user']);
                        }

                        if (load_check == 2) {
                            //edit tk01
                            $(".modal-header #title_modal").text('ข้อมูล ทก.01');
                            if (data['data_tk01']['status_tk_01'] == 6 || data['data_tk01']['status_tk_01'] == 2 || data['data_tk01']['status_tk_01'] == 4) {
                                fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));
                                $(".modal-body #researched_information").prop('disabled', true);
                                $(".modal-body #select_teacher").prop('disabled', true);
                                $(".modal-footer #submit").prop('disabled', true);
                            } else {
                                fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', false));
                                $(".modal-body #researched_information").prop('disabled', false);
                                $(".modal-body #select_teacher").prop('disabled', false);
                                $(".modal-footer #submit").prop('disabled', false);
                            }

                            if (data['project']['data_tk01'] === null) {
                                $(".modal-body #tk_01_file_read").hide();
                            } else {
                                $(".modal-body #tk_01_file_read").show();
                                $("#tk_01_file_read_btn").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk01']['id_file_01'], '_blank'));
                            }

                            $(".modal-body #tk_01").show();
                            $(".modal-body #tk_02").hide();
                            $(".modal-body #tk_03").hide();
                            $(".modal-body #tk_04").hide();
                            $(".modal-body #tk_05").hide();
                            $(".modal-body #url_route").val("student/projectlist/edit/tk01/" + data['project']['id_project'] + "/" + data['data_tk01']['id_tk_01'] + "/" + data['data_tk01']['id_file_01']);
                        } else if (load_check == 3) {
                            //edit tk02
                            $(".modal-body #select_teacher").prop('disabled', true);

                            if (data['data_tk02'] != null) {
                                $(".modal-body #tk_02_file_read").show();
                                if (data['data_tk02']['status_tk_02'] == 6 || data['data_tk02']['status_tk_02'] == 2 || data['data_tk02']['status_tk_02'] == 4) {
                                    $(".modal-footer #submit").prop('disabled', true);
                                    $(".modal-body #file_project").prop('disabled', true);
                                    $(".modal-body #file_present").prop('disabled', true);
                                } else {
                                    fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', false));
                                    $(".modal-footer #submit").prop('disabled', false);
                                    $(".modal-body #file_project").prop('disabled', false);
                                    $(".modal-body #file_present").prop('disabled', false);
                                }
                                $("#tk_02_file_read_1").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk02']['id_file_02'], '_blank'));
                                if (data['data_tk02']['id_file_present'] != null) {
                                    $(".modal-body #tk_02_file_present").show();
                                    $("#tk_02_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk02']['id_file_present'], '_blank'));
                                } else {
                                    $(".modal-body #tk_02_file_present").hide();
                                }
                                $(".modal-body #url_route").val("student/projectlist/edit/tk02/" + data['data_tk02']['id_tk_02'] + "/" + data['data_tk02']['id_file_02'] + "/" + data['data_tk02']['id_file_present']);
                            } else {
                                $(".modal-body #tk_02_file_read").hide();
                                $(".modal-footer #submit").prop('disabled', false);
                                $(".modal-body #file_project").prop('disabled', false);
                                $(".modal-body #file_present").prop('disabled', false);
                                $(".modal-body #url_route").val("student/projectlist/create/tk02/" + data['project']['id_project']);
                            }

                            $(".modal-header #title_modal").text('ข้อมูล ทก.02');
                            $(".modal-body #tk_01").hide();
                            $(".modal-body #tk_02").show();
                            $(".modal-body #tk_03").hide();
                            $(".modal-body #tk_04").hide();
                            $(".modal-body #tk_05").hide();
                            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));

                        } else if (load_check == 4) {
                            //edit tk03
                            $(".modal-body #select_teacher").prop('disabled', true);
                            if (data['data_tk03'] != null) {
                                $(".modal-body #file_read_tk03").show();
                                if (data['data_tk03']['status_tk_03'] == 6 || data['data_tk03']['status_tk_03'] == 2 || data['data_tk03']['status_tk_03'] == 4) {
                                    $(".modal-footer #submit").prop('disabled', true);
                                    $(".modal-body #file_project_tk03").prop('disabled', true);
                                    $(".modal-body #file_present_tk03").prop('disabled', true);
                                } else {
                                    fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', false));
                                    $(".modal-footer #submit").prop('disabled', false);
                                    $(".modal-body #file_project_tk03").prop('disabled', false);
                                    $(".modal-body #file_present_tk03").prop('disabled', false);
                                }
                                $("#tk_03_file_read_1").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk03']['id_file_03'], '_blank'));
                                if (data['data_tk03']['id_file_present'] != null) {
                                    $(".modal-body #tk_03_file_present").show();
                                    $("#tk_03_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk03']['id_file_present'], '_blank'));
                                } else {
                                    $(".modal-body #tk_03_file_present").hide();
                                }
                                if (data['data_tk03']['id_score'] != null) {
                                    $(".modal-body #tk_03_score").show();
                                    // $("#tk_03_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk03']['id_file_present'], '_blank'));
                                } else {
                                    $(".modal-body #tk_03_score").hide();
                                }
                                $(".modal-body #url_route").val("student/projectlist/edit/tk03/" + data['data_tk03']['id_tk_03'] + "/" + data['data_tk03']['id_file_03'] + "/" + data['data_tk03']['id_file_present']);
                            } else {
                                $(".modal-body #file_read_tk03").hide();
                                $(".modal-footer #submit").prop('disabled', false);
                                $(".modal-body #file_project_tk03").prop('disabled', false);
                                $(".modal-body #file_present_tk03").prop('disabled', false);
                                $(".modal-body #url_route").val("student/projectlist/create/tk03/" + data['project']['id_project']);
                            }
                            $(".modal-header #title_modal").text('ข้อมูล ทก.03');
                            $(".modal-body #tk_01").hide();
                            $(".modal-body #tk_02").hide();
                            $(".modal-body #tk_03").show();
                            $(".modal-body #tk_04").hide();
                            $(".modal-body #tk_05").hide();
                            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));
                        } else if (load_check == 5) {
                            //edit tk04
                            $(".modal-body #select_teacher").prop('disabled', true);
                            if (data['data_tk04'] != null) {
                                if (data['data_tk04']['status_tk_04'] == 2 || data['data_tk04']['status_tk_04'] == 4) {
                                    $(".modal-footer #submit").prop('disabled', true);
                                    $(".modal-body #file_project_tk04").prop('disabled', true);
                                } else {
                                    $(".modal-footer #submit").prop('disabled', false);
                                    $(".modal-body #file_project_tk04").prop('disabled', false);
                                }
                                data['data_tk04']['file_04'].forEach((data_file_04, index) => {
                                    var statusButtonHtml = '';
                                    if (data_file_04.status_file == 0) {
                                        statusButtonHtml = `
                                                    <button type="button" class="btn btn-block btn-warning btn-sm">กำลังตรวจสอบ</button>
                                            `;
                                    } else if (data_file_04.status_file == 1) {
                                        statusButtonHtml = `
                                                    <button type="button" class="btn btn-block btn-success btn-sm">ตรวจสอบแล้ว</button>
                                            `;
                                    } else {
                                        statusButtonHtml = `
                                                <button type="button" class="btn btn-block btn-danger btn-sm">ไม่ผ่านการตรวจสอบ</button>
                                            `;
                                    }
                                    var newHtml = `
                                            <div class="row">
                                                <div class="col-md-2 text-center mt-2">
                                                    <p>${index + 1}</p>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <a class="btn btn-app bg-danger" href="<?= site_url('openfile/') ?>${data_file_04.id_file}" target="_blank">
                                                        <i class="fas fa-file-pdf"></i> ไฟล์รายงานความก้าวหน้า
                                                    </a>
                                                </div>
                                                <div class="col-md-3 text-center mt-2">
                                                    <p>${data_file_04.date_uploade}</p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                        ${statusButtonHtml}
                                                </div>
                                            </div>
                                        `;
                                    // Append the new HTML code to the tk_04_file_1 element
                                    $("#tk_04_file_1").append(newHtml);
                                });
                                $(".modal-body #tk_04_file").show();
                                $(".modal-body #url_route").val("student/projectlist/edit/tk04/" + data['data_tk04']['id_tk_04']);
                            } else {
                                $(".modal-footer #submit").prop('disabled', false);
                                $(".modal-body #tk_04_file").hide();
                                $(".modal-body #url_route").val("student/projectlist/create/tk04/" + data['project']['id_project']);
                                $(".modal-body #file_project_tk04").prop('disabled', false);
                            }
                            $(".modal-header #title_modal").text('ข้อมูล ทก.04');
                            $(".modal-body #tk_01").hide();
                            $(".modal-body #tk_02").hide();
                            $(".modal-body #tk_03").hide();
                            $(".modal-body #tk_04").show();
                            $(".modal-body #tk_05").hide();
                            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));
                        } else if (load_check == 6) {
                            //edit tk05
                            $(".modal-body #select_teacher").prop('disabled', true);
                            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));
                            $(".modal-body #chairman").prop('disabled', true);
                            $(".modal-body #director_1").prop('disabled', true);
                            $(".modal-body #director_2").prop('disabled', true);
                            if (data['data_tk05'] != null) {
                                if (data['data_tk05']['status_tk_05'] == 6 || data['data_tk05']['status_tk_05'] == 2 || data['data_tk05']['status_tk_05'] == 4) {
                                    $(".modal-footer #submit").prop('disabled', true);
                                    $(".modal-body #file_project_tk05").prop('disabled', true);
                                    $(".modal-body #file_present_tk05").prop('disabled', true);
                                } else {
                                    $(".modal-footer #submit").prop('disabled', false);
                                    $(".modal-body #file_project_tk05").prop('disabled', false);
                                    $(".modal-body #file_present_tk05").prop('disabled', false);
                                }
                                $("#tk_05_file_read_1").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk05']['id_file_05'], '_blank'));
                                if (data['data_tk05']['id_file_present'] != null) {
                                    $(".modal-body #tk_05_file_present").show();
                                    $("#tk_05_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk05']['id_file_present'], '_blank'));
                                } else {
                                    $(".modal-body #tk_05_file_present").hide();
                                }
                                if (data['data_tk05']['id_score'] != null) {
                                    $(".modal-body #tk_05_score").show();
                                } else {
                                    $(".modal-body #tk_05_score").hide();
                                }
                                $(".modal-body #chairman").val(data['data_tk05']['email_director1']);
                                $(".modal-body #director_1").val(data['data_tk05']['email_director2']);
                                data_teacher.forEach(element => {
                                    if (element.email_user == data['project']['email_teacher']) {
                                        $(".modal-body #director_2").val(element.name_user + ' ' + element.lastname_user);
                                    }
                                });
                                $(".modal-body #url_route").val("student/projectlist/edit/tk05/" + data['data_tk05']['id_tk_05'] + "/" + data['data_tk05']['id_file_05'] + "/" + data['data_tk05']['id_file_present']);
                            } else {
                                $(".modal-footer #submit").prop('disabled', false);
                                $(".modal-body #tk_05_score").hide();
                                $(".modal-body #file_read_tk05").hide();
                                $(".modal-body #url_route").val("student/projectlist/create/tk05/" + data['project']['id_project']);
                            }
                            $(".modal-header #title_modal").text('ข้อมูล ทก.05');
                            $(".modal-body #tk_01").hide();
                            $(".modal-body #tk_02").hide();
                            $(".modal-body #tk_03").hide();
                            $(".modal-body #tk_04").hide();
                            $(".modal-body #tk_05").show();
                        }
                    },
                });
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
    <script>
        var data_project = [];
        function getTableData() {
            if ($.fn.DataTable.isDataTable('#example1')) {
                $('#example1').DataTable().destroy();
            }
            $('#example1').DataTable({
                "processing": true,
                "pageLength": 10,
                "pagingType": "full_numbers", // Display pagination as 1, 2, 3... instead of Previous, Next buttons
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('student/projectlist/getdata'); ?>",
                    'type': 'GET',
                    'dataSrc': 'data',
                },
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "searching": false,
                "ordering": false,
                "drawCallback": function (settings) {
                    var daData = settings.json.data;
                    data_project = daData;
                    if (daData.length == 0) {
                        $('#example1 tbody').html(`<tr><td colspan="8" class="text-center"> ไม่พบข้อมูล</td></tr>`);
                    }
                },
                'columns': [
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return meta.settings.oAjaxData.start += 1;

                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return data.name_project_th + '<br>' + data.name_project_eng;
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            if (data.data_tk01 == null) {
                                return 'ยังไม่มีข้อมูล'
                            } else {
                                return create_button(data.data_tk01.status_tk_01, 2, data.id_project);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            if (data.data_tk02 == null) {
                                return create_button(1, 3, data.id_project);
                            } else {
                                return create_button(data.data_tk02.status_tk_02, 3, data.id_project);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            if (data.data_tk03 == null) {
                                return create_button(1, 4, data.id_project);
                            } else {
                                return create_button(data.data_tk03.status_tk_03, 4, data.id_project);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            if (data.data_tk04 == null) {
                                return create_button(1, 5, data.id_project);
                            } else {
                                return create_button(data.data_tk04.status_tk_04, 5, data.id_project);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            if (data.data_tk05 == null) {
                                return create_button(1, 6, data.id_project);
                            } else {
                                return create_button(data.data_tk05.status_tk_05, 6, data.id_project);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            if (data.status_project == 0) {
                                return `<span class="badge bg-success">ปิดโครงงานพิเศษ</span>`
                            } else if (data.status_project == 1) {
                                return `<span class="badge bg-warning">กำลังดำเนินการ</span>`
                            } else {
                                return `<span class="badge bg-danger">ยกเลิกโครงงานพิเศษ</span>`
                            }
                        }
                    },
                ]
            });
            $('[data-toggle="tooltip"]').tooltip();
        }
    </script>
    <script>
        function create_button(status, index_modal, id_project) {
            if (status == 1) {
                return '<a class="btn btn-app bg-secondary" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fas fa-pencil-ruler"></i> ร่างเอกสาร' +
                    '</a>';
            } else if (status == 2) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-warning" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fab fa-searchengin"></i> อยู่ระหว่างการตรวจสอบเอกสาร' +
                    '</a>' +
                    '</td>';
            } else if (status == 3) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-maroon" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fas fa-undo-alt"></i> เอกสารถูกตีกลับ' +
                    '</a>' +
                    '</td>';
            } else if (status == 4) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-orange" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fas fa-spinner"></i> รอยืนยันจากที่ปรึกษา' +
                    '</a>' +
                    '</td>';
            } else if (status == 5) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-danger" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fas fa-window-close"></i> ยกเลิกเอกสาร' +
                    '</a>' +
                    '</td>';
            } else if (status == 6) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-success" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fas fa-check-circle"></i> เอกสารผ่าน' +
                    '</a>' +
                    '</td>';
            } else if (status == 7) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-info" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',' + id_project + ')">' +
                    '<i class="fas fa-user-cog"></i> ติดต่อเจ้าหน้าที่' +
                    '</a>' +
                    '</td>';
            }
        }
    </script>
    <script>
        function cancel_project() {
            // Create an options object for inputOptions
            var options = {};
            data_project.forEach(element => {
                if (element.status_project != 0) {
                    options[element.id_project] = element.name_project_th;
                }
            });

            Swal.fire({
                title: "เลือกโครงงานพิเศษที่ต้องการยกเลิก",
                input: "select",
                inputOptions: options,
                inputPlaceholder: "เลือกโครงงาน",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                confirmButtonText: "ตกลง",
                cancelButtonText: "ปิด",
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                        if (value) {
                            var loadingIndicator = Swal.fire({
                                title: 'กำลังโหลด...',
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                onBeforeOpen: () => {
                                    Swal.showLoading();
                                }
                            });
                            console.log(value);
                            $.ajax({
                                url: '<?= base_url('/student/projectlist/cancelproject/') ?>' + value,
                                type: "POST",
                                cache: false,
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
                                    console.log(response);
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
                        } else {
                            resolve("คุณต้องเลือกโครงงานก่อน :)");
                        }
                    });
                }
            });
        }
    </script>