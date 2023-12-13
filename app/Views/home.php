<title>ข่าวสาร</title>
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">

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
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php foreach ($data_news as $key => $value): ?>
                                            <?php if ($value['image_news'] !== null): ?>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" <?php echo ($key === 0) ? 'class="active"' : ''; ?>></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ol>
                                    <div class="carousel-inner" style="border-radius: 10px;">
                                        <?php foreach ($data_news as $key => $value): ?>
                                            <?php if ($value['image_news'] !== null): ?>
                                                <?php
                                                $base64Data = $value['image_news'];
                                                $decodedData = base64_decode($base64Data);
                                                $imageSrc = 'data:image/png;base64,' . base64_encode($decodedData);
                                                ?>
                                                <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                                                    <img class="d-block w-100" src="<?= $imageSrc ?>"
                                                        alt="Slide <?= $key + 1 ?>">
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
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
                                        <table class="table table-hover text-nowrap table-striped">
                                            <thead>
                                                <tr class="text-center bg-olive">
                                                    <th colspan="2">รายละเอียดข่าวสาร</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data_news as $key => $value): ?>
                                                    <?php if ($value['details_news'] !== null): ?>
                                                        <tr>
                                                            <td>
                                                                <?= $key + 1 ?>
                                                            </td>
                                                            <td>
                                                                <?= $value['details_news'] ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>