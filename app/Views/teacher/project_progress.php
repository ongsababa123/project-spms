<title>ติดตามความก้าวหน้า</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ติดตามความก้าวหน้า</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ติดตามความก้าวหน้า</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-navy card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                            href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                            aria-selected="true">โครงงานพิเศษที่ยังดำเนินการอยู่</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-one-profile" role="tab"
                                            aria-controls="custom-tabs-one-profile"
                                            aria-selected="false">โครงงานพิเศษที่จบแล้ว</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-home-tab">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                                    <th>ชื่อโครงงานพิเศษ</th>
                                                    <th class="text-center">ทก.01</th>
                                                    <th class="text-center">ทก.02</th>
                                                    <th class="text-center">ทก.03</th>
                                                    <th class="text-center">ทก.04</th>
                                                    <th class="text-center">ทก.05</th>
                                                    <th class="text-center">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1.</td>
                                                    <td>
                                                        <p>โครงงานพิเศษที่ 1asdsadsadasdasdas</p>
                                                        <p>โครงงานพิเศษที่ 1</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(2)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(3)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(4)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(5)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(6)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center"><span
                                                            class="badge bg-warning mt-3">กำลังดำเนินการ</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-profile-tab">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                                    <th>ชื่อโครงงานพิเศษ</th>
                                                    <th class="text-center">ทก.01</th>
                                                    <th class="text-center">ทก.02</th>
                                                    <th class="text-center">ทก.03</th>
                                                    <th class="text-center">ทก.04</th>
                                                    <th class="text-center">ทก.05</th>
                                                    <th class="text-center">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1.</td>
                                                    <td>
                                                        <p>โครงงานพิเศษที่ 1asdsadsadasdasdas</p>
                                                        <p>โครงงานพิเศษที่ 1</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(2)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(3)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(4)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(5)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-default" onclick="load_modal(6)">
                                                            <i class="fas fa-pencil-ruler"></i> ร่างเอกสาร
                                                        </a>
                                                    </td>
                                                    <td class="text-center"><span
                                                            class="badge bg-success mt-3">จบโครงงานพิเศษ</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal-default">
        <div id="main_tk">
            <?= $this->include("modal/main_tk"); ?>
        </div>
    </div>
    <script>
        function load_modal(load_check, data_encode) {
            main_tk = document.getElementById("main_tk");
            main_tk.style.display = "block";

            if (load_check == 1) {
                //create tk01
                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 2) {
                //edit tk01
                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 3) {
                //edit tk02
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").show();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 4) {
                //edit tk03
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").show();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 5) {
                //edit tk04
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").show();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 6) {
                //edit tk05
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").show();
            }
        }
    </script>