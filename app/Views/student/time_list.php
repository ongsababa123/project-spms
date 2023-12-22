<title>เลือกช่วงเวลา</title>
<link rel="stylesheet" href="<?= base_url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<?php
$sortOrder = '0'; // Set a default value

if (isset($_GET['sort'])) {
    $sortOrder = $_GET['sort'];
}
?>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>เลือกช่วงเวลาที่ว่าง</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">เลือกช่วงเวลา</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-navy shadow">
                    <div class="card-header">
                        <h3 class="card-title">ตารางช่วงเวลาที่ว่าง</h3>
                        <div class="card-tools">

                        </div>
                    </div>
                    <?php if ($data_project != null): ?>
                        <form class="mb-3" id="form_timelist" action="javascript:void(0)" method="post"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <select class="form-control" id="form_project" name="form_project">
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <button type="button" class="btn btn-success btn-round" onclick="sortItems()">
                                            ค้นหา
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 130px" class="text-center" rowspan="2">ช่วงเวลา</th>
                                            <th style="width: 130px" class="text-center" colspan="5">วัน</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 130px" class="text-center">จันทร์</th>
                                            <th style="width: 130px" class="text-center">อังคาร</th>
                                            <th style="width: 130px" class="text-center">พุธ</th>
                                            <th style="width: 130px" class="text-center">พฤหัสบดี</th>
                                            <th style="width: 130px" class="text-center">ศุกร์</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Array of day names
                                        $dayNames = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

                                        // Loop for each hour
                                        for ($i = 9; $i <= 16; $i++):
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?= $i ?>:00 -
                                                    <?= ($i + 1) ?>:00
                                                </td>
                                                <?php
                                                // Loop for each day
                                                foreach ($dayNames as $day):
                                                    $temp_name = $day . ',' . $i;
                                                    ?>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" id="<?= $temp_name ?>" name="<?= $temp_name ?>"
                                                                onclick="handleCheckboxClick(this)">
                                                            <label for="<?= $temp_name ?>"></label>
                                                        </div>
                                                    </td>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix" id="footer_btn_save">
                                <button type="submit" class="btn btn btn-success">บันทึก</button>
                                <button type="button" class="btn btn btn-danger" id="cancel" name="cancel">ยกเลิก</button>
                            </div>
                            <div class="card-footer clearfix" id="footer_btn_edit">
                                <button type="button" class="btn btn btn-info">แก้ไขข้อมูล</button>
                            </div>
                            <!-- /.card -->
                        </form>
                    <?php else: ?>
                        <br>
                        <div class="row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-10">
                                <div class="alert alert-danger alert-dismissible">
                                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                    ไม่พบข้อมูลโครงงาน
                                </div>
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
    <script>

        var data_project = <?php echo json_encode($data_project); ?>;
        var sort_project = "<?php echo $sortOrder; ?>";
        if (data_project.length === 0) {
            var id_pj = "";
        } else {
            var id_pj = data_project[0].id_project;
        }
        $(document).ready(function () {
            data_project.forEach(element_project => {
                if (sort_project == element_project.id_project) {
                    newOption = $('<option>').val(element_project.id_project).text(element_project.name_project_th);
                    $("#form_project").append(newOption.prop('selected', true));
                    id_pj = element_project.id_project;
                } else {
                    newOption = $('<option>').val(element_project.id_project).text(element_project.name_project_th);
                    $("#form_project").append(newOption);
                }
            });
            getdata(id_pj);
        });

        $("#footer_btn_save").hide();
        $("input[type='checkbox']").prop("disabled", true);

        $("#footer_btn_edit").on("click", function () {
            $("#footer_btn_save").show();
            $("#footer_btn_edit").hide();
            $("input[type='checkbox']").prop("disabled", false);
        })
        $("#cancel").on("click", function () {
            $("#footer_btn_save").hide();
            $("#footer_btn_edit").show();
            $("input[type='checkbox']").prop("disabled", true);
        })
    </script>
    <script>
        function sortItems() {
            var id_project = document.getElementById("form_project").value;
            // Adjust the URL based on your requirements
            window.location.href = `?sort=${id_project}`;
        }

        function getdata(id_project_check) {
            $.ajax({
                url: '<?= base_url('student/timelist/getdata/') ?>' + id_project_check,
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.success) {
                        response.data.forEach(element => {
                            var day = element.date_;
                            var time = element.time_number;
                            var checkboxId = day + '\\,' + time;
                            $("#" + checkboxId).prop("checked", true);
                        });
                    } 
                },
            });
        }
    </script>
    <script>
        $("#form_timelist").on('submit', function (e) {
            e.preventDefault();
            const urlRouteInput = "student/timelist/create/" + id_pj;
            action_(urlRouteInput, 'form_timelist');
        });
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
        function handleCheckboxClick(checkbox) {
            // Log the value of the clicked checkbox
            console.log('Checkbox value:', checkbox.checked);
            console.log('Checkbox id:', checkbox.id);
        }
    </script>