<title>ติดตามความก้าว</title>
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
                        <h1>ติดตามความก้าวหน้า</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">อาจารย์</li>
                            <li class="breadcrumb-item active">ติดตามความก้าวหน้า</li>
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
                                            <div class="col-sm-12">
                                                <h4>ชื่อโครงการ : หฟกฟหกฟหกหฟกฟหก</h4>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>ชื่อนักศึกษา</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6>นาย ฟหกหฟกหฟกฟ</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>สถานะโครงการ</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2 text-center mx-auto mx-auto">
                                                <a class="btn btn-app bg-secondary">
                                                    <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                </a>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <a class="btn btn-app bg-warning">
                                                    <i class="fab fa-searchengin"></i> อยู่ระหว่างตรวจสอบเอกสาร
                                                </a>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <a class="btn btn-app bg-info">
                                                    <i class="fas fa-undo-alt"></i> ส่งคืนเพื่อแก้ไข
                                                </a>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <a class="btn btn-app bg-orange">
                                                    <i class="fas fa-cogs"></i> รอยืนยัน
                                                </a>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <a class="btn btn-app bg-danger">
                                                    <i class="fas fa-window-close"></i> ยกเลิกเอกสาร
                                                </a>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <a class="btn btn-app bg-success">
                                                <i class="fas fa-check-square"></i> ดำเนินการเสร็จสิ้น
                                                </a>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <a class="btn btn-app bg-indigo">
                                                <i class="fas fa-user-shield"></i> กรุณาติดต่อเจ้าหน้าที่
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2 text-center mx-auto">
                                                <h6> ทก.01</h6>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <h6> ทก.02</h6>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <h6> ทก.03</h6>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <h6> ทก.04</h6>
                                            </div>
                                            <div class="col-sm-2 text-center mx-auto">
                                                <h6> ทก.05</h6>
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