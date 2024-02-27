<title>การจัดการข้อมูลเจ้าหน้าที่</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>การจัดการข้อมูลเจ้าหน้าที่</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">การจัดการข้อมูลเจ้าหน้าที่</li>
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
                                onclick="load_modal(3)">
                                <i class="fas fa-file-csv"></i> เพิ่มข้อมูลเจ้าหน้าที่ด้วยไฟล์
                            </a>
                            <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-default"
                                onclick="load_modal(1)">
                                <i class="fas fa-plus-square"></i> เพิ่มข้อมูลเจ้าหน้าที่
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
                                    <th class="text-center"></th>
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
        <div id="c_user_file">
            <?= $this->include("modal/c_user_file"); ?>
        </div>
    </div>
    <script>
        function load_modal(load_check, data_encode) {
            const modalBody = $(".modal-body");
            const modalHeader = $(".modal-header");
            const crud_user = $("#crud_user");
            const c_user_file = $("#c_user_file");

            crud_user.show();
            modalBody.find('#name_user, #lastname_user, #email_user, #phone_user').val('');
            $(".modal-body #div_room").hide();

            const switchStatus = $(".modal-body #customSwitch_status");
            const textPassword = $(".modal-body #text_password");

            switch (load_check) {
                case 1:
                    crud_user.show();
                    c_user_file.hide();
                    modalBody.find('#name_user, #lastname_user, #email_user, #phone_user, #password, #room_user').prop('disabled', false);
                    textPassword.hide();
                    modalHeader.find('#title_modal').text("สร้างข้อมูลเจ้าหน้าที่");
                    modalBody.find('#url_route').val("admin/user/create/3");
                    switchStatus.hide();
                    break;
                case 2:
                    crud_user.show();
                    c_user_file.hide();
                    const rowData = JSON.parse(decodeURIComponent(data_encode));
                    switchStatus.show();
                    modalBody.find('#name_user').val(rowData.name_user);
                    modalBody.find('#lastname_user').val(rowData.lastname_user);
                    modalBody.find('#email_user').val(rowData.email_user);
                    modalBody.find('#phone_user').val(rowData.phone_user);
                    textPassword.show();

                    const customSwitch3 = $(".modal-body #customSwitch3");
                    const labelCustomSwitch3 = $(".modal-body #LabelcustomSwitch3");

                    if (rowData.status_user == 1 || rowData.status_user == 0) {
                        customSwitch3.prop('checked', rowData.status_user == 1);
                        labelCustomSwitch3.text(rowData.status_user == 1 ? "เปิดใช้งาน" : "ปิดใช้งาน");
                        customSwitch3.prop('disabled', false);
                        modalBody.find('#name_user, #lastname_user, #email_user, #phone_user, #password').prop('disabled', false);
                    } else {
                        customSwitch3.prop('checked', false);
                        labelCustomSwitch3.text("รอการเข้าสู่ระบบครั้งแรก");
                        customSwitch3.prop('disabled', true);
                        modalBody.find('#name_user, #lastname_user, #email_user, #phone_user, #password').prop('disabled', true);
                    }

                    modalHeader.find('#title_modal').text("แก้ไขข้อมูลเจ้าหน้าที่");
                    modalBody.find('#url_route').val("admin/user/update/" + rowData.id_user);
                    break;
                case 3:
                    crud_user.hide();
                    c_user_file.show();
                    $(".modal-body #file").empty();
                    $(".modal-body #url_route_file").val("admin/user/create_file/3");
                    break;
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
                "processing": true,
                "pageLength": 10,
                "pagingType": "full_numbers", // Display pagination as 1, 2, 3... instead of Previous, Next buttons
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('admin/user/getdata/3'); ?>",
                    'type': 'GET',
                    'dataSrc': 'data',
                },
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "drawCallback": function (settings) {
                    var daData = settings.json.data;
                    if (daData.length == 0) {
                        $('#example1 tbody').html(`<tr><td colspan="5" class="text-center"> ไม่พบข้อมูล</td></tr>`);
                    }
                },
                'columns': [
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return meta.settings.oAjaxData.start += 1;

                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return data.name_user + ' ' + data.lastname_user;
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return data.email_user;
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return data.phone_user;
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            var status = data.status_user;
                            if (status == 0) {
                                return `<span class='badge bg-danger'>ปิดใช้งาน</span>`;
                            } else if (status == 1) {
                                return `<span class='badge bg-success'>เปิดใช้งาน</span>`;
                            } else {
                                return `<span class='badge bg-info'>รอการแรกเข้า</span>`;
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            return `<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default" onclick="load_modal(2,'${encodedRowData}')"><i class="fas fa-user-edit"></i> แก้ไขข้อมูล</button>`;
                        }
                    },
                ]
            });
            $('[data-toggle="tooltip"]').tooltip();
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
            if (response.validator) {
                var mes = "";
                if (response.validator.email_user) {
                    mes += 'ช่องอีเมลจะต้องมีที่อยู่อีเมลที่ถูกต้องหรือมีอีเมล์ซ้ำในระบบ.' + '<br><hr/>'
                }
                if (response.validator.name_user) {
                    mes += 'ชื่อต้องมีอย่างน้อย 2 ตัว.' + '<br><hr/>';
                }
                if (response.validator.lastname_user) {
                    mes += 'นามสกุลต้องมีอย่างน้อย 2 ตัว.' + '<br><hr/>';
                }
                if (response.validator.phone_user) {
                    mes += 'เบอร์ติดต่อต้องมี 10 หลัก.' + '<br>';
                }
                if (response.validator.password) {
                    mes += 'รหัสผ่านต้องมี 4 หลักขึ้น.' + '<br>';
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
    </script>