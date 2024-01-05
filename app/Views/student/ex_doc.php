<title>ตัวอย่างไฟล์</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ตัวอย่างไฟล์</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ตัวอย่างไฟล์</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-navy shadow">
                    <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hove">
                            <thead>
                                <tr>
                                    <th class="text-center">ทก.01</th>
                                    <th class="text-center">ทก.02</th>
                                    <th class="text-center">ทก.03</th>
                                    <th class="text-center">ทก.04</th>
                                    <th class="text-center">ทก.05</th>
                                    <th class="text-center">คู่มือโครงงาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 6; $i++): ?>
                                    <td class="text-center">
                                        <?php $found = false; ?>
                                        <?php foreach ($file_ex as $key => $value): ?>
                                            <?php if ($value['type_doc'] == $i): ?>
                                                <?php $found = true; ?>
                                                <?php if ($value['type_doc'] == 6): ?>
                                                    <a class="btn btn-app bg-info" target="_blank"
                                                        href="<?= base_url('officer/docex/openfile/') . $value['file']['id_file'] ?>">
                                                        <i class="fas fa-file-pdf"></i>ตัวอย่างเอกสาร คู่มือโครงงาน
                                                    </a>
                                                <?php else: ?>
                                                    <a class="btn btn-app bg-info" target="_blank"
                                                        href="<?= base_url('officer/docex/openfile/') . $value['file']['id_file'] ?>">
                                                        <i class="fas fa-file-pdf"></i>ตัวอย่างเอกสาร ทก.
                                                        <?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if (!$found): ?>
                                            <!-- Display a default link or message if no document of this type is found -->
                                            <a class="btn btn-app bg-maroon" href="#"><i class="fas fa-window-close"></i>ไม่มีเอกสารตัวอย่าง</a>
                                        <?php endif; ?>
                                    </td>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>