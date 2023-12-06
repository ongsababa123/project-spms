<title>หน้าหลัก</title>

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
                        <h1>หน้าหลัก</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">นักศึกษา</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info shadow">
                    <div class="card-header">
                        <h3 class="card-title">เมนู</h3>

                        <div class="card-tools">
                            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i>
                            </button> -->
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-lightblue">
                                    <span class="info-box-icon"><i class="fas fa-table"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-number">กรอกตารางว่าง</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-success">
                                    <span class="info-box-icon"><i class="fas fa-exclamation-circle"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-number">ตรวจสอบสถานะ</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-gray">
                                    <span class="info-box-icon"><i class="fas fa-file-alt"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-number">ตัวอย่างเอกสาร</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-danger">
                                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-number">ตรวจสอบตารางสอบ</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
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