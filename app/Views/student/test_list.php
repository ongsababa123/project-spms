<title>ตรวจสอบตารางสอบ</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ตรวจสอบตารางสอบ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ตรวจสอบตารางสอบ</li>
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
                                            onclick="display_type2()">สอบ 60</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-one-messages" role="tab" onclick="display_type3()"
                                            aria-controls="custom-tabs-one-messages" aria-selected="false">สอบ 100</a>
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
    <script>
        $(document).ready(function () {
            display_type1();
        });
    </script>
    <script>
        function display_type1() {
            $("#overlay").show()
            $.ajax({
                type: "POST",
                url: "<?= site_url('student/testlist/getdata/1') ?>",
                success: function (data) {
                    $("#overlay").hide()
                    if (data === false) {
                        var display_type1 = `<h1 class="text-center">ไม่พบข้อมูล</h1> `;
                        $("#custom-tabs-one-home").append(display_type1);
                    } else {
                        data.forEach(element => {
                            var day = getDayThai(element.date_test);
                            var statusInfo = getStatusInfo(element.status_test);
                            var students1 = getStudentName(element['students'][1]);
                            var students2 = getStudentName(element['students'][2]);
                            var consultantsInfo = getConsultantsInfo(element['project']['name_consult']);
                            var timeInfo = getTimeInfo(element.time_test);
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
                    </div>
                `;
                            $("#custom-tabs-one-home").append(display_type1);
                        });
                    }
                }
            });
        }
    </script>
    <script>
        var value_display_type2 = 0;
        function display_type2() {
            if (value_display_type2 == 0) {
                value_display_type2++;
                $("#overlay").show()
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('student/testlist/getdata/2') ?>",
                    success: function (data) {
                        $("#overlay").hide()
                        if (data === false) {
                            var display_type2 = `<h1 class="text-center">ไม่พบข้อมูล</h1> `;
                            $("#custom-tabs-one-profile").append(display_type2);
                        } else {
                            data.forEach(element => {
                                var day = getDayThai(element.date_test);
                                var statusInfo = getStatusInfo(element.status_test);
                                var students1 = getStudentName(element['students'][1]);
                                var students2 = getStudentName(element['students'][2]);
                                var consultantsInfo = getConsultantsInfo(element['project']['name_consult']);
                                var timeInfo = getTimeInfo(element.time_test);
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
                    </div>
                `;
                                $("#custom-tabs-one-profile").append(display_type2);
                            });
                        }
                    }
                });
            }
        }
    </script>
    <script>
        var value_display_type3 = 0;
        function display_type3() {
            if (value_display_type3 == 0) {
                value_display_type3++;
                $("#overlay").show()
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('student/testlist/getdata/3') ?>",
                    success: function (data) {
                        $("#overlay").hide()
                        if (data === false) {
                            var display_type3 = `<h1 class="text-center">ไม่พบข้อมูล</h1> `;
                            $("#custom-tabs-one-messages").append(display_type3);
                        } else {
                            data.forEach(element => {
                                var day = getDayThai(element.date_test);
                                var statusInfo = getStatusInfo(element.status_test);
                                var students1 = getStudentName(element['students'][1]);
                                var students2 = getStudentName(element['students'][2]);
                                var consultantsInfo = getConsultantsInfo(element['project']['name_consult']);
                                var timeInfo = getTimeInfo(element.time_test);
                                if (element.status_test != '1') {
                                    var status_button = "disabled";
                                } else {
                                    var status_button = "";
                                }
                                var display_type3 = `
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
                                            <h6>สอบ 100</h6>
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
                                    <hr />
                                    <label class="text-muted">คณะกรรมการประเมิน</label>
                                    <div class="row">
                                    <div class="col-3">
                                        <label>ประธานกรรม</label>
                                        <h6>${element['chairman'] ? element['chairman'].name_user + " " + element['chairman'].lastname_user : "ไม่มีประธานกรรมการ"}</h6>
                                    </div>
                                    <div class="col-3">
                                        <label>กรรมการคนที่ 1</label>
                                        <h6>${element['teachers'].name_user + " " + element['teachers'].lastname_user}</h6>
                                    </div>
                                    <div class="col-3">
                                        <label>กรรมการคนที่ 1</label>
                                        <h6>${element['director'] ? element['director'].name_user + " " + element['director'].lastname_user : "ไม่มีกรรมการ"}</h6>
                                    </div>
                                    </div>
                                </div>
                            </div>`;
                                $("#custom-tabs-one-messages").append(display_type3);
                            });
                        }
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
            if (consultants != null) {
                var name_consultants = consultants.split(',')
                if (name_consultants.length === 1) {
                    return [name_consultants[0], "ไม่มีที่ปรึกษาร่วม"];
                } else if (name_consultants.length === 2) {
                    return [name_consultants[0], name_consultants[1]];
                } else {
                    return ["ไม่มีที่ปรึกษาร่วม", "ไม่มีที่ปรึกษาร่วม"];
                }
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