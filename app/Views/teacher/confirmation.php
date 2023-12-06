<title>การยืนยันโครงการพิเศษ</title>
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<style>
    .col-lg-custome {
        -ms-flex: 0 0 16.666667%;
        flex: 1 0 19.666667%;
        max-width: 20.666667%;
    }
</style>
<style>
    .info-box {
        transition: transform 0.3s ease-in-out;
    }

    .info-box:hover {
        transform: scale(1.05);
    }

    .expanded-content {
        display: none;
        transition: height 0.3s ease-in-out;
    }

    .info-box:hover .expanded-content {
        display: block;
        height: 100px;
        /* Adjust the height as needed */
    }
</style>


<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>การยืนยันโครงการพิเศษ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">อาจารย์</li>
                            <li class="breadcrumb-item active">การยืนยันโครงการพิเศษ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-secondary shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 col-12">
                                <div class="card card-info shadow">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-11">
                                                <h4>ชื่อโครงการ : หฟกฟหกฟหกหฟกฟหก</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <a class="btn btn-app bg-danger">
                                                    <i class="fas fa-file-pdf"></i> เปิดไฟล์
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group clearfix">
                                                    <div class="icheck-orange d-inline">
                                                        <input type="radio" id="radioorange1" name="r1" checked>
                                                        <label for="radioorange1">
                                                            ขอให้ปรับปรุงข้อเสนอโครงการ
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group clearfix">
                                                    <div class="icheck-success d-inline">
                                                        <input type="radio" id="radiosuccess2" name="r1">
                                                        <label for="radiosuccess2">
                                                            ตอบรับ
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group clearfix">
                                                    <div class="icheck-danger d-inline">
                                                        <input type="radio" id="radiodanger3" name="r1">
                                                        <label for="radiodanger3">
                                                            ปฏิเสธ
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-block btn-info">ยืนยัน</button>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    </div>