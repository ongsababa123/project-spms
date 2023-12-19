<title>ตรวจสอบคำร้องโครงงานพิเศษ</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ตรวจสอบคำร้องโครงงานพิเศษ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ตรวจสอบคำร้องโครงงานพิเศษ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-navy card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-tk01-tab" data-toggle="pill"
                                            href="#custom-tabs-tk01" role="tab" aria-controls="custom-tabs-tk01"
                                            aria-selected="true">ทก.01</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-tk02-tab" data-toggle="pill"
                                            href="#custom-tabs-tk02" role="tab" aria-controls="custom-tabs-tk02"
                                            aria-selected="false">ทก.02</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-tk03-tab" data-toggle="pill"
                                            href="#custom-tabs-tk03" role="tab" aria-controls="custom-tabs-tk03"
                                            aria-selected="false">ทก.03</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-tk04-tab" data-toggle="pill"
                                            href="#custom-tabs-tk04" role="tab" aria-controls="custom-tabs-tk04"
                                            aria-selected="false">ทก.04</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-tk05-tab" data-toggle="pill"
                                            href="#custom-tabs-tk05" role="tab" aria-controls="custom-tabs-tk05"
                                            aria-selected="false">ทก.05</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-tk01" role="tabpanel"
                                        aria-labelledby="custom-tabs-tk01-tab">
                                        <?php foreach ($data_project_tk as $key => $value): ?>
                                            <?php if ($value['data_tk01'] != null): ?>
                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h3 class="card-title">ชื่อโครงงานพิเศษ :
                                                            <?= $value['data_project']['name_project_th'] ?>
                                                        </h3>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="collapse">
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
                                                                        <?= $count ?>
                                                                    </label>
                                                                    <h6>
                                                                        ไม่มี
                                                                    </h6>
                                                                </div>
                                                            <?php elseif ($count == 2): ?>
                                                                <div class="col-3">
                                                                    <label>นักศึกษาคนที่
                                                                        <?= $count ?>
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
                                                                    <i class="fas fa-file-pdf"></i> ไฟล์ ทก.01
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer clearfix">
                                                        <button type="button" class="btn btn-danger float-right">
                                                            แจ้งให้ติดต่อ</button>
                                                        <button type="button" class="btn btn-warning float-right mr-3">
                                                            ส่งกลับไปแก้ไข</button>
                                                        <button type="button" class="btn btn-success float-right mr-3">
                                                            ผ่าน</button>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-tk02" role="tabpanel"
                                        aria-labelledby="custom-tabs-tk02-tab">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">ชื่อโครงงานพิเศษ </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-5">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="btn btn-app bg-danger" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(3)">
                                                            <i class="fas fa-file-pdf"></i> ไฟล์ ทก.02
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer clearfix">
                                                <button type="button" class="btn btn-danger float-right">
                                                    แจ้งให้ติดต่อ</button>
                                                <button type="button" class="btn btn-warning float-right mr-3">
                                                    ส่งกลับไปแก้ไข</button>
                                                <button type="button" class="btn btn-success float-right mr-3">
                                                    ผ่าน</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-tk03" role="tabpanel"
                                        aria-labelledby="custom-tabs-tk03-tab">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">ชื่อโครงงานพิเศษ </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-5">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="btn btn-app bg-danger" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(4)">
                                                            <i class="fas fa-file-pdf"></i> ไฟล์ ทก.03
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer clearfix">
                                                <button type="button" class="btn btn-danger float-right">
                                                    แจ้งให้ติดต่อ</button>
                                                <button type="button" class="btn btn-warning float-right mr-3">
                                                    ส่งกลับไปแก้ไข</button>
                                                <button type="button" class="btn btn-success float-right mr-3">
                                                    ผ่าน</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-tk04" role="tabpanel"
                                        aria-labelledby="custom-tabs-tk04-tab">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">ชื่อโครงงานพิเศษ </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-5">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="btn btn-app bg-danger" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(5)">
                                                            <i class="fas fa-file-pdf"></i> ไฟล์ ทก.04
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer clearfix">
                                                <button type="button" class="btn btn-danger float-right">
                                                    แจ้งให้ติดต่อ</button>
                                                <button type="button" class="btn btn-warning float-right mr-3">
                                                    ส่งกลับไปแก้ไข</button>
                                                <button type="button" class="btn btn-success float-right mr-3">
                                                    ผ่าน</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-tk05" role="tabpanel"
                                        aria-labelledby="custom-tabs-tk05-tab">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">ชื่อโครงงานพิเศษ </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-5">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="btn btn-app bg-danger" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(6)">
                                                            <i class="fas fa-file-pdf"></i> ไฟล์ ทก.05
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer clearfix">
                                                <button type="button" class="btn btn-danger float-right">
                                                    แจ้งให้ติดต่อ</button>
                                                <button type="button" class="btn btn-warning float-right mr-3">
                                                    ส่งกลับไปแก้ไข</button>
                                                <button type="button" class="btn btn-success float-right mr-3">
                                                    ผ่าน</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        var data_project_tk = <?php echo json_encode($data_project_tk); ?>;
        function load_modal(load_check, data_encode) {
            main_tk = document.getElementById("main_tk");
            main_tk.style.display = "block";
            console.log(data_project_tk[data_encode]['data_student']);
            $(".modal-body #select_teacher").empty();
            const fieldsToReset = [
                '#name_project', '#name_project_eng', '#department', '#subject_group',
                '#semester', '#learn_year', '#name_consult_1', '#name_consult_2',
                '#name_student_2', '#lastname_student_2', '#email_student_2', '#phone_student_2', '#room_student_2',
                '#name_student_3', '#lastname_student_3', '#email_student_3', '#phone_student_3', '#room_student_3', '#select_teacher'
            ];
            var newOption = $('<option></option>').val(data_project_tk[data_encode]['data_teacher']['email_user']).text(data_project_tk[data_encode]['data_teacher']['name_user'] + ' ' + data_project_tk[data_encode]['data_teacher']['lastname_user'] + ' ' + '[จำนวนโครงงานพิเศษ : ' + data_project_tk[data_encode]['data_teacher']['project_count'] + ']');
            $(".modal-body #select_teacher").append(newOption);
            data_project_tk[data_encode]['data_student'].forEach(function (element, key) {
                console.log(element.name_user);
                key++;
                $(".modal-body #name_student_" + key).val(element.name_user);
                $(".modal-body #lastname_student_" + key).val(element.lastname_user);
                $(".modal-body #email_student_" + key).val(element.email_user);
                $(".modal-body #phone_student_" + key).val(element.phone_user);
                $(".modal-body #room_student_" + key).val(element.room_user);
            });

            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));
            if (load_check == 2) {
                //edit tk01
                $(".modal-body #tk_01_file_upload").hide();

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