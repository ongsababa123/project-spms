<title>ประวัติการสอบ</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ประวัติการสอบ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ประวัติการสอบ</li>
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
                                <div class="row">
                                    <div>
                                        <label>ช่วงเวลา</label>
                                    </div>
                                    <div class="col-2 mr-2">
                                        <select class="form-control select2 select2-danger"
                                            data-dropdown-css-class="select2-danger" style="width: 100%;"
                                            id="time_select" name="time_select">
                                            <option selected="selected" value="9">09:00 - 10:00</option>
                                            <option value="10">10:00 - 11:00</option>
                                            <option value="11">11:00 - 12:00</option>
                                            <option value="13">13:00 - 14:00</option>
                                            <option value="14">14:00 - 15:00</option>
                                            <option value="15">15:00 - 16:00</option>
                                            <option value="16">16:00 - 17:00</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label>วัน</label>
                                    </div>
                                    <div class="col-2">
                                        <select class="form-control select2 select2-danger"
                                            data-dropdown-css-class="select2-danger" style="width: 100%;"
                                            id="day_select" name="day_select">>
                                            <option selected="selected" value="monday">จันทร์</option>
                                            <option value="tuesday">อังคาร</option>
                                            <option value="wednesday">พุธ</option>
                                            <option value="thursday">พฤหัสบดี</option>
                                            <option value="friday">ศุกร์</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label></label>
                                        <button type="button" class="btn btn-primary"
                                            onclick="onclick_search()">ค้นหา</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-info card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                            href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                            aria-selected="true">สอบหัวข้อ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-one-profile" role="tab"
                                            aria-controls="custom-tabs-one-profile" aria-selected="false"
                                            onclick="get_display_Type2(false)">สอบ 60</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-one-messages" role="tab"
                                            aria-controls="custom-tabs-one-messages" aria-selected="false">สอบ
                                            100</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-home-tab">
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-profile-tab">
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-messages-tab">
                                        <div class="card card-danger">
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
                                                <label class="text-muted">รายละเอียดสถานที่และเวลา</label>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <label>วัน</label>
                                                        <h6>จันทร์</h6>
                                                    </div>
                                                    <div class="col-2">
                                                        <label>เวลา</label>
                                                        <h6>16:00 - 17:00</h6>
                                                    </div>
                                                    <div class="col-4">
                                                        <label>สถานที่</label>
                                                        <h6>ห้องประชุมพวงเส็ด</h6>
                                                    </div>
                                                    <div class="col-2">
                                                        <label>ประเภทการสอบ</label>
                                                        <br>
                                                        <h6>สอบ100</h6>
                                                    </div>
                                                    <div class="col-2">
                                                        <label>สถานะ</label>
                                                        <br>
                                                        <span class="badge bg-danger">ไม่ผ่าน</span>
                                                    </div>
                                                </div>
                                                <hr>
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
                                                    <div class="col-3">
                                                        <label>นักศึกษาคนที่ 1</label>
                                                        <h6>นาย หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                </div>
                                                <hr>
                                                <label class="text-muted">ที่ปรึกษาโครงงานพิเศษ</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>อาจารย์ที่ปรึกษา</label>
                                                        <h6>อาจารย์ หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>อาจารย์ที่ปรึกษาร่วม ท่านที่ 1</label>
                                                        <h6>อาจารย์ หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>อาจารย์ที่ปรึกษาร่วม ท่านที่ 2</label>
                                                        <h6>อาจารย์ หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                </div>
                                                <hr>
                                                <label class="text-muted">คณะกรรมการประเมิน</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>ประธานกรรมการ</label>
                                                        <h6>อาจารย์ หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>กรรมการ ท่านที่ 1</label>
                                                        <h6>อาจารย์ หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>กรรมการ ท่านที่ 2</label>
                                                        <h6>อาจารย์ หฟกฟหกฟหกฟ</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer clearfix">
                                                <button type="button" class="btn btn-primary float-right">
                                                    ดูคะแนน</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay dark" id="overlay" name="overlay">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- <div class="modal fade" id="modal-default">
        <div id="create_test">
        </div>
    </div>
    <script>
        function load_modal(load_check, data_encode) {
            create_test = document.getElementById("create_test");
            create_test.style.display = "block";

            if (load_check == 1) {

            } 
        }
    </script> -->
    <script>
        $(document).ready(function () {
            var time_select = document.getElementById('time_select').value;
            var day_select = document.getElementById('day_select').value;
            get_display_Type1();
        });
    </script>
    <script>
        function onclick_search() {
            get_display_Type1();
            get_display_Type2(true);
        }
    </script>
    <script>
        function get_display_Type1() {
            var time_select = document.getElementById('time_select').value;
            var day_select = document.getElementById('day_select').value;
            $("#custom-tabs-one-home").empty();
            $("#overlay").show()
            $.ajax({
                type: "POST",
                url: "<?= site_url('officer/historytest/getdata/type/') ?>" + day_select + "/" + time_select + "/" + 1,
                success: function (data) {
                    $("#overlay").hide()
                    data['test_type1'].forEach(element => {
                        var day = getDayThai(element.date_test);
                        var statusInfo = getStatusInfo(element.status_test);
                        var students1 = getStudentName(element['students'][1]);
                        var students2 = getStudentName(element['students'][2]);
                        var consultantsInfo = getConsultantsInfo(element['project']['name_consult']);
                        var timeInfo = getTimeInfo(element.time_test);
                        console.log(element.status_test);
                        if (element.status_test != '1') {
                            var status_button = "disabled";
                        } else {
                            var status_button = "";
                        }
                        var display_type1 = `
                    <div class="card card-${statusInfo.color}">
                        <div class="card-header">
                            <h3 class="card-title">ชื่อโครงงานพิเศษ : ${element['project'].name_project_th}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="text-muted">รายละเอียดสถานที่และเวลา</label>
                            <div class="row">
                                ${day}
                                ${timeInfo}
                                <div class="col-4">
                                    <label>สถานที่</label>
                                    <h6>${element.location}</h6>
                                </div>
                                <div class="col-2">
                                    <label>ประเภทการสอบ</label>
                                    <br />
                                    <h6>สอบหัวข้อ</h6>
                                </div>
                                <div class="col-2">
                                    <label>สถานะ</label>
                                    <br />
                                    ${statusInfo.badge}
                                </div>
                            </div>
                            <hr />
                            <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                            <div class="row">
                                ${getStudentInfo(element['students'][0], "คนที่ 1")}
                                ${getStudentInfo(element['students'][1], "คนที่ 2")}
                                ${getStudentInfo(element['students'][2], "คนที่ 3")}
                            </div>
                            <hr />
                            <label class="text-muted">ที่ปรึกษาโครงงานพิเศษ</label>
                            <div class="row">
                                ${getTeacherInfo(element['teachers'], "ที่ปรึกษา")}
                                ${getConsultantInfo(consultantsInfo[0], "ที่ปรึกษาร่วม ท่านที่ 1")}
                                ${getConsultantInfo(consultantsInfo[1], "ที่ปรึกษาร่วม ท่านที่ 2")}
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                        <button type="button" class="btn btn-danger float-right" ${status_button} onclick="confirm_Alert('ต้องการยกเลิกการสอบหรือไม่', '${element.id_test_list}')">
                            ยกเลิก
                        </button>
                        </div>
                    </div>
                `;
                        $("#custom-tabs-one-home").append(display_type1);
                    });
                }
            });
        }
    </script>
    <script>
        var display2 = 0;
        function get_display_Type2(search_end) {
            var time_select = document.getElementById('time_select').value;
            var day_select = document.getElementById('day_select').value;
            if (display2 == 0 || search_end == true) {
                display2++;
                $("#custom-tabs-one-profile").empty();
                $("#overlay").show()
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('officer/historytest/getdata/type/') ?>" + day_select + "/" + time_select + "/" + 2,
                    success: function (data) {
                        $("#overlay").hide()
                        data['test_type1'].forEach(element => {
                            var day = getDayThai(element.date_test);
                            var statusInfo = getStatusInfo(element.status_test);
                            var students1 = getStudentName(element['students'][1]);
                            var students2 = getStudentName(element['students'][2]);
                            var consultantsInfo = getConsultantsInfo(element['project']['name_consult']);
                            var timeInfo = getTimeInfo(element.time_test);
                            console.log(element.status_test);
                            if (element.status_test != '1') {
                                var status_button = "disabled";
                            } else {
                                var status_button = "";
                            }
                            var display_type2 = `
                    <div class="card card-${statusInfo.color}">
                        <div class="card-header">
                            <h3 class="card-title">ชื่อโครงงานพิเศษ : ${element['project'].name_project_th}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="text-muted">รายละเอียดสถานที่และเวลา</label>
                            <div class="row">
                                ${day}
                                ${timeInfo}
                                <div class="col-4">
                                    <label>สถานที่</label>
                                    <h6>${element.location}</h6>
                                </div>
                                <div class="col-2">
                                    <label>ประเภทการสอบ</label>
                                    <br />
                                    <h6>สอบ 60</h6>
                                </div>
                                <div class="col-2">
                                    <label>สถานะ</label>
                                    <br />
                                    ${statusInfo.badge}
                                </div>
                            </div>
                            <hr />
                            <label class="text-muted">ผู้จัดทำโครงงานพิเศษ</label>
                            <div class="row">
                                ${getStudentInfo(element['students'][0], "คนที่ 1")}
                                ${getStudentInfo(element['students'][1], "คนที่ 2")}
                                ${getStudentInfo(element['students'][2], "คนที่ 3")}
                            </div>
                            <hr />
                            <label class="text-muted">ที่ปรึกษาโครงงานพิเศษ</label>
                            <div class="row">
                                ${getTeacherInfo(element['teachers'], "ที่ปรึกษา")}
                                ${getConsultantInfo(consultantsInfo[0], "ที่ปรึกษาร่วม ท่านที่ 1")}
                                ${getConsultantInfo(consultantsInfo[1], "ที่ปรึกษาร่วม ท่านที่ 2")}
                            </div>
                        </div>
                        <div class="card-footer">
                        <button type="button" class="btn btn-info float-right ml-2"  onclick="confirm_Alert('ต้องการยกเลิกการสอบหรือไม่', '${element.id_test_list}')">
                            ดูคะแนน
                        </button>
                        
                        <button type="button" class="btn btn-danger float-right" ${status_button} onclick="confirm_Alert('ต้องการยกเลิกการสอบหรือไม่', '${element.id_test_list}')">
                            ยกเลิก
                        </button>
                        </div>
                    </div>
                `;
                            $("#custom-tabs-one-profile").append(display_type2);
                        });
                    }
                });
            }
        }
    </script>
    <script>
        function getDayThai(date_test) {
            var day = null;
            switch (date_test) {
                case "monday":
                    day = "จันทร์";
                    break;
                case "tuesday":
                    day = "อังคาร";
                    break;
                case "wednesday":
                    day = "พุธ";
                    break;
                case "thursday":
                    day = "พฤหัสบดี";
                    break;
                case "friday":
                    day = "ศุกร์";
                    break;
            }
            return `
            <div class="col-2">
                <label>วัน</label>
                <h6>${day}</h6>
            </div>
        `;
        }

        function getStatusInfo(status_test) {
            var statusInfo = {};
            if (status_test === "1") {
                statusInfo.badge = `<span class="badge bg-warning">กำลังอยู่ในช่วงสอบ</span>`;
                statusInfo.color = "warning";
            } else if (status_test === "2") {
                statusInfo.badge = `<span class="badge bg-success">สอบผ่าน</span>`;
                statusInfo.color = "success";
            } else {
                statusInfo.badge = `<span class="badge bg-danger">สอบไม่ผ่าน</span>`;
                statusInfo.color = "danger";
            }
            return statusInfo;
        }

        function getStudentName(student) {
            return student ? student.name_user : "ไม่มีนักศึกษา";
        }

        function getStudentInfo(student, label) {
            return `
            <div class="col-3">
                <label>นักศึกษา${label}</label>
                <h6>${getStudentName(student)}</h6>
            </div>
        `;
        }

        function getConsultantsInfo(consultants) {
            if (consultants) {
                return consultants.split(',');
            } else {
                return ["ไม่มีที่ปรึกษาร่วม", "ไม่มีที่ปรึกษาร่วม"];
            }
        }

        function getConsultantInfo(consultant, label) {
            return `
            <div class="col-3">
                <label>อาจารย์${label}</label>
                <h6>${consultant}</h6>
            </div>
        `;
        }

        function getTeacherInfo(teacher, label) {
            return `
            <div class="col-3">
                <label>อาจารย์${label}</label>
                <h6>${teacher.name_user + " " + teacher.lastname_user}</h6>
            </div>
        `;
        }

        function getTimeInfo(time_test) {
            var time = time_test + ":00 - " + (parseInt(time_test) + 1) + ":00";
            return `
            <div class="col-2">
                <label>เวลา</label>
                <h6>${time}</h6>
            </div>
        `;
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
                        url: '<?= base_url('/officer/historytest/delete/') ?>' + url,
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