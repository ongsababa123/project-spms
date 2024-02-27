<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เปลี่ยนรหัสผ่าน</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?= base_url('dist/css/fontsgoogle.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dist/sweetalert/sweetalert2.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
    <link rel="icon" href="<?= base_url('dist/img/icon/favicon.ico') ?>" type="image/gif">
</head>
<style>
    /* เพิ่ม CSS ในส่วนนี้เพื่อกำหนดฟอนต์ให้กับทุกส่วนของหน้าเว็บไซต์ */
    * {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a class="h4"><b>ระบบการจัดการโครงงานพิเศษ</b></a>
                </div>
                <div class="card-body">
                    <form class="mb-3" id="login_form_first" action="javascript:void(0)" method="post"
                        enctype="multipart/form-data">
                        <p class="login-box-msg">กรุณาเปลี่ยนรหัสผ่าน</p>
                        <div id="errorAlert" class="alert alert-danger alert-dismissible" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon fas fa-ban"></i>
                        </div>

                        <label for="password">รหัสผ่าน</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password"
                                name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <label for="password">ยืนยันรหัสผ่าน</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="รหัสผ่าน"
                                id="password_confirmation" name="password_confirmation">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" id="login_btn"
                                    name="login_btn">ล็อคอิน</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- SweetAlert2 -->
    <script src="<?= base_url('dist/sweetalert/sweetalert2.js'); ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

    <script>
        $("#login_form_first").on('submit', function (e) {
            e.preventDefault();
            var id_user = <?php echo json_encode($id_user); ?>;
            action_('login/first/auth/'+ id_user, 'login_form_first');
        });
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
                beforeSend: function () {
                    // Show loading indicator
                    loadingIndicator;
                },
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(() => {
                            if (response.reload) {
                                window.location.href = '<?= site_url() ?>' + response.type;
                            }
                        }, 2000);
                    } else {
                        Swal.fire({
                            title: response.message,
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                },
                complete: function () {
                    // Hide loading indicator on completion
                    loadingIndicator.close();
                }
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to show error alert
            $('#login_btn').prop('disabled', true);

            function showErrorAlert(message) {
                var alertDiv = document.getElementById('errorAlert');
                alertDiv.innerHTML = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                    '<h5><i class="icon fas fa-ban"></i> Alert!</h5>' +
                    '<p>' + message + '</p>';
                alertDiv.style.display = 'block';
            }

            // Function to check password on change
            function checkPassword() {
                var password = document.getElementById('password').value;
                var passwordConfirmation = document.getElementById('password_confirmation').value;

                // Check if passwords match
                if (password !== passwordConfirmation) {
                    showErrorAlert('รหัสผ่านและการยืนยันรหัสผ่านไม่ตรงกัน');
                    $('#login_btn').prop('disabled', true);
                    return;
                }

                // Check if password meets minimum length requirement (you can modify this condition)
                if (password.length < 8) {
                    showErrorAlert('รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร');
                    $('#login_btn').prop('disabled', true);
                    return;
                }

                if (passwordConfirmation.length >= 8 && password == passwordConfirmation) {
                    $('#login_btn').prop('disabled', false);
                }
                // If all checks pass, hide the error alert
                document.getElementById('errorAlert').style.display = 'none';
            }

            // Attach event listeners to password and password confirmation fields
            document.getElementById('password').addEventListener('input', checkPassword);
            document.getElementById('password_confirmation').addEventListener('input', checkPassword);
        });
    </script>

    <body>

</html>