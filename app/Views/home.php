<title>ข่าวสาร</title>
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
                        <h1>ข่าวสาร</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ข่าวสาร</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
            <div class="card card-secondary shadow" style="border-radius: 10px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                            </div>
                            <div class="col-5">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" style="border-radius: 10px;">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100"
                                                src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="https://placehold.it/900x500/f39c12/ffffff&text="
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-7">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr class="text-center">
                                                    <th colspan="2">รายละเอียดข่าวสาร</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback
                                                        doner.</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback
                                                        doner.</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback
                                                        doner.</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback
                                                        doner.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
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