<title>การจัดการข้อมูลตัวอย่างไฟล์</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>การจัดการข้อมูลตัวอย่างไฟล์</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">การจัดการข้อมูลตัวอย่างไฟล์</li>
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
                            <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-default"
                                onclick="load_modal(1)">
                                <i class="fas fa-plus-square"></i> เพิ่มข้อมูลไฟล์
                            </a>
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
    <div class="modal fade" id="modal-default">
        <div id="create_exdoc">
            <?= $this->include("modal/create_exdoc"); ?>
        </div>
    </div>
    <script>
        function load_modal(load_check) {
            create_exdoc = document.getElementById("create_exdoc");
            if (load_check == 1) {
                create_exdoc.style.display = "block";
                $(".modal-header #title_modal").text("สร้างข้อมูลตัวอย่างไฟล์");
                $(".modal-body #url_route").val("officer/docex/create");
                $(".modal-body #customSwitch_status").hide();
            }
        }
    </script>
    <script>
        function action_(url, form) {
            var formData = new FormData(document.getElementById(form));
            // Show loading progress
            var loadingIndicator = Swal.fire({
                title: 'กำลังโหลด...',
                allowOutsideClick: false,
                showConfirmButton: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = (evt.loaded / evt.total) * 100;
                            // You can update a progress bar or any other loading indicator here
                        }
                    }, false);
                    return xhr;
                },
                beforeSend: function () {
                    // Show loading indicator
                    loadingIndicator;
                },
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(() => {
                            if (response.reload) {
                                window.location.reload();
                            }
                        }, 2000);
                    } else {
                        // Handle error response
                        handleErrorResponse(response);
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error
                    handleErrorResponse({
                        message: "เกิดข้อผิดพลาด"
                    });
                },
                complete: function () {
                    // Hide loading indicator on completion
                    loadingIndicator.close();
                }
            });
        }

        function handleErrorResponse(response) {
            Swal.fire({
                title: response.message,
                icon: 'error',
                showConfirmButton: true,
                width: '55%'
            });
        } 
    </script>
    <script>
        $(document).ready(function () {
            var file_ex = <?php echo json_encode($file_ex); ?>;
            console.log(file_ex);
        })
    </script>