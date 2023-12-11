<title>การจัดการข้อมูลนักศึกษา</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>การจัดการข้อมูลนักศึกษา</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">การจัดการข้อมูลนักศึกษา</li>
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
                                <i class="fas fa-plus-square"></i> เพิ่มข้อมูลนักศึกษา
                            </a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hove">
                            <thead>
                                <tr>
                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                    <th class="text-center">ชื่อ - นามสกุล</th>
                                    <th class="text-center">อีเมล์</th>
                                    <th class="text-center">เบอร์โทรศัพท์</th>
                                    <th class="text-center">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>

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
        <div id="crud_user">
            <?= $this->include("modal/crud_user"); ?>
        </div>
    </div>
    <script>
        function load_modal(load_check, data_encode) {
            crud_user = document.getElementById("crud_user");
            crud_user.style.display = "block";

            if (load_check == 1) {
                //create user
                $(".modal-header #title_modal").text("สร้างข้อมูลนักศึกษา");
                $(".modal-body #url_route").val("admin/user/create/1");
            } else if (load_check == 2) {
                //edit user

            }
        }
    </script>
    <script>
        $(document).ready(function () {
            getTableData();
        });
    </script>
    <script>
        function getTableData() {
            if ($.fn.DataTable.isDataTable('#example1')) {
                $('#example1').DataTable().destroy();
            }
            $('#example1').DataTable({
                "processing": "<i class='fa fa-refresh fa-spin'></i>",
                "pageLength": 10,
                "pagingType": "full_numbers", // Display pagination as 1, 2, 3... instead of Previous, Next buttons
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('admin/user/getdata/1'); ?>",
                    'type': 'GET',
                    'dataSrc': 'data',
                },
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "searching": false,
                "drawCallback": function (settings) {
                    $('#example1 tbody').html(`<tr><td colspan="5" class="text-center"> ไม่พบข้อมูล</td></tr>`);
                },
            });
            $('[data-toggle="tooltip"]').tooltip();
        }
    </script>
    <script>
        function action_(url, form) {
            var formData = new FormData(document.getElementById(form));
            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
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
                        if (response.validator) {
                            var mes = "";
                            if (response.validator.email) {
                                mes += 'ช่องอีเมลจะต้องมีที่อยู่อีเมลที่ถูกต้องหรือมีอีเมล์ซ้ำในระบบ.' + '<br><hr/>'
                            }
                            if (response.validator.name) {
                                mes += 'ชื่อต้องมีอย่างน้อย 2 ตัว.' + '<br><hr/>';
                            }
                            if (response.validator.last) {
                                mes += 'นามสกุลต้องมีอย่างน้อย 2 ตัว.' + '<br><hr/>';
                            }
                            if (response.validator.phone) {
                                mes += 'เบอร์ติดต่อต้องมี 10 หลัก.' + '<br>';
                            }
                            Swal.fire({
                                title: mes,
                                icon: 'error',
                                showConfirmButton: true,
                                width: '55%'
                            });
                        } else {
                            Swal.fire({
                                title: response.message,
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        title: "เกิดข้อผิดพลาด",
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
        }
    </script>