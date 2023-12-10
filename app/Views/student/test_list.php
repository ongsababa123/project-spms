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
                                            aria-controls="custom-tabs-one-profile" aria-selected="false">สอบ 70</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-one-messages" role="tab"
                                            aria-controls="custom-tabs-one-messages" aria-selected="false">สอบ 100</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-home-tab">
                                        <div class="card card-warning">
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
                                                        <h6>สอบหัวข้อ</h6>
                                                    </div>
                                                    <div class="col-2">
                                                        <label>สถานะ</label>
                                                        <br>
                                                        <span class="badge bg-info">กำลังรอการสอบ</span>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-profile-tab">
                                        <div class="card card-success">
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
                                                        <h6>สอบหัวข้อ</h6>
                                                    </div>
                                                    <div class="col-2">
                                                        <label>สถานะ</label>
                                                        <br>
                                                        <span class="badge bg-success">สอบ 70</span>
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
                                            </div>
                                            <div class="card-footer clearfix">
                                                <button type="button" class="btn btn-primary float-right"> ดูคะแนน</button>
                                            </div>
                                        </div>
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
                                                <button type="button" class="btn btn-primary float-right"> ดูคะแนน</button>
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