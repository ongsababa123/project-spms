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
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
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
                                <?php if (empty($data_project)): ?>
                                    <tr>
                                        <td class="text-center" colspan="8">ไม่พบข้อมูล</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($data_project as $key => $value): ?>
                                        <tr>
                                            <td class="text-center">1.</td>
                                            <td>
                                                <p>โครงงานพิเศษที่ 1asdsadsadasdasdas</p>
                                                <p>โครงงานพิเศษที่ 1</p>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                    data-target="#modal-default" onclick="load_modal(2)">
                                                    <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                    data-target="#modal-default" onclick="load_modal(3)">
                                                    <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                    data-target="#modal-default" onclick="load_modal(4)">
                                                    <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                    data-target="#modal-default" onclick="load_modal(5)">
                                                    <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                    data-target="#modal-default" onclick="load_modal(6)">
                                                    <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                </a>
                                            </td>
                                            <td class="text-center"><span class="badge bg-warning mt-3">กำลังดำเนินการ</span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
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
        var data_project = <?php echo json_encode($data_project); ?>;
        console.log(data_project);
    </script>
    <script>
        function load_modal(load_check, data_encode) {
            main_tk = document.getElementById("main_tk");
            main_tk.style.display = "block";

            if (load_check == 1) {
                //create tk01
                var data_user = <?php echo json_encode($data_user); ?>;
                $(".modal-body #tk_01_file_upload").show();
                $(".modal-body #tk_01_file_read").hide();

                $(".modal-body #name_student_1").val(data_user[0]['name_user']);
                $(".modal-body #lastname_student_1").val(data_user[0]['lastname_user']);
                $(".modal-body #email_student_1").val(data_user[0]['email_user']);
                $(".modal-body #phone_student_1").val(data_user[0]['phone_user']);
                $(".modal-body #room_student_1").val(data_user[0]['room_user']);

                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();

                $(".modal-body #url_route").val("student/projectlist/create/tk01");
            } else if (load_check == 2) {
                //edit tk01
                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 3) {
                //edit tk02
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").show();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 4) {
                //edit tk03
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").show();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 5) {
                //edit tk04
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").show();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 6) {
                //edit tk05
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").show();
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