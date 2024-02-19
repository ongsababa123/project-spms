<title>
    ประวัติคอมเม้นโครงงาน
    <?= $project_name['name_project_th'] ?>
</title>
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
                        <h1>
                            ประวัติคอมเม้นโครงงาน
                            <?= $project_name['name_project_th'] ?>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">
                                ประวัติคอมเม้นโครงงาน
                                <?= $project_name['name_project_th'] ?>
                            </li>
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
                            <div class="col-md-12">
                                <!-- The time line -->
                                <?php if (!empty($comment_data)): ?>
                                    <div class="timeline">
                                        <?php
                                        $currentDate = null;
                                        ?>
                                        <?php foreach ($comment_data as $row): ?>
                                            <?php $date = explode(" ", $row['date_time'])[0]; ?>
                                            <?php if ($date !== $currentDate): ?>
                                                <div class="time-label">
                                                    <span class="bg-red">
                                                        <?= $date ?>
                                                    </span>
                                                </div>
                                                <?php $currentDate = $date; ?>
                                            <?php endif; ?>
                                            <div>
                                                <i class="fas fa-comments bg-yellow"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="fas fa-clock"></i>
                                                        <?= $row['date_time'] ?>
                                                    </span>
                                                    <h3 class="timeline-header">
                                                        <?php if ($row['type'] == '1'): ?>
                                                            <a class="text-primary">ทก.01</a>
                                                        <?php elseif ($row['type'] == '2'): ?>
                                                            <a class="text-primary">ทก.02</a>
                                                        <?php elseif ($row['type'] == '3'): ?>
                                                            <a class="text-primary">ทก.03</a>
                                                        <?php elseif ($row['type'] == '4'): ?>
                                                            <a class="text-primary">ทก.04</a>
                                                        <?php elseif ($row['type'] == '5'): ?>
                                                            <a class="text-primary">ทก.05</a>
                                                        <?php endif; ?>
                                                        <?= $project_name['name_project_th'] ?>
                                                    </h3>
                                                    <div class="timeline-body">
                                                        <?= $row['comment'] ?>
                                                    </div>
                                                    <?php if ($row['id_file'] != null): ?>
                                                        <div class="timeline-footer">
                                                            <a href="<?php echo site_url('openfile/') ?><?= $row['id_file'] ?>"
                                                                class="btn btn-warning btn-sm"
                                                                target="_blank"><i class="fas fa-file"></i> ไฟล์คอมเม้นที่แนบมา</a>
                                                            
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div>
                                            <i class="fas fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="text-center">
                                        <h1>ยังไม่มีข้อมูล</้>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        var comment_data = <?php echo json_encode($comment_data); ?>;
        var project_name = <?php echo json_encode($project_name); ?>;
        console.log(project_name);
    </script>