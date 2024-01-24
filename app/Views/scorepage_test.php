<title>แบบฟอร์มบันทึกคะแนน</title>
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

    th {
        background-color: #F5F6FA;
    }

    tbody {
        border-bottom: 10px solid #ccc;
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
                        <h1>แบบฟอร์มบันทึกคะแนน</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">แบบฟอร์มบันทึกคะแนน</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-navy shadow">
                    <div class="card-header">
                        <h3 class="card-title">ชื่อโครงการ :
                            <?= $project['name_project_th'] ?>
                        </h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="table_history" class="table table-hover table-bordered table-striped">
                                    <form class="mb-3" id="form_score" action="javascript:void(0)" method="post"
                                        enctype="multipart/form-data">
                                        <thead>
                                            <tr class="text-center">
                                                <th>ลำดับ</th>
                                                <th>ลักษณะเกณฑ์</th>
                                                <th>1 คะแนน</th>
                                                <th>2 คะแนน</th>
                                                <th>3 คะแนน</th>
                                                <th>4 คะแนน</th>
                                                <th>5 คะแนน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td><strong>ความสำคัญ วัตถุประสงต์ ขอบเขต</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ความสำคัญและความเป็นมาของโครงงานพิเศษ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_1_1"
                                                                name="r1_1" value="1">
                                                            <label for="score1_1_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_1_2"
                                                                name="r1_1" value="2">
                                                            <label for="score1_1_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_1_3"
                                                                name="r1_1" value="3">
                                                            <label for="score1_1_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_1_4"
                                                                name="r1_1" value="4">
                                                            <label for="score1_1_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_1_5"
                                                                name="r1_1" value="5">
                                                            <label for="score1_1_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- วัตถุประสงต์การศึกษามีความสอดคล้องกับความสำคัญของปัญหา</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_2_1"
                                                                name="r1_2" value="1">
                                                            <label for="score1_2_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_2_2"
                                                                name="r1_2" value="2">
                                                            <label for="score1_2_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_2_3"
                                                                name="r1_2" value="3">
                                                            <label for="score1_2_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_2_4"
                                                                name="r1_2" value="4">
                                                            <label for="score1_2_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score1_2_5"
                                                                name="r1_2" value="5">
                                                            <label for="score1_2_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td><strong>ทฤษฏีและงานวิจัยที่เกี่ยวข้อง</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- มีทฤษฏีเพียงพอต่อการทำงานโครงงานพิเศษ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_1_1"
                                                                name="r2_1" value="1">
                                                            <label for="score2_1_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_1_2"
                                                                name="r2_1" value="2">
                                                            <label for="score2_1_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_1_3"
                                                                name="r2_1" value="3">
                                                            <label for="score2_1_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_1_4"
                                                                name="r2_1" value="4">
                                                            <label for="score2_1_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_1_5"
                                                                name="r2_1" value="5">
                                                            <label for="score2_1_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- มีการทบทวนงานวิจัยที่เกี่ยวข้องอย่างเหมาะสม</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_2_1"
                                                                name="r2_2" value="1">
                                                            <label for="score2_2_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_2_2"
                                                                name="r2_2" value="2">
                                                            <label for="score2_2_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_2_3"
                                                                name="r2_2" value="3">
                                                            <label for="score2_2_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_2_4"
                                                                name="r2_2" value="4">
                                                            <label for="score2_2_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score2_2_5"
                                                                name="r2_2" value="5">
                                                            <label for="score2_2_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td><strong>วิธีการดำเนินงาน</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- การดำเนินงานมีลำดับขั้นตอนถูกต้องเหมาะสมตามหลักการ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_1_1"
                                                                name="r3_1" value="1">
                                                            <label for="score3_1_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_1_2"
                                                                name="r3_1" value="2">
                                                            <label for="score3_1_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_1_3"
                                                                name="r3_1" value="3">
                                                            <label for="score3_1_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_1_4"
                                                                name="r3_1" value="4">
                                                            <label for="score3_1_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_1_5"
                                                                name="r3_1" value="5">
                                                            <label for="score3_1_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- มีการเลือกใช้เครื่องในการเก็บข้อมูลมีความเหมาะสมตามหลักการ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_2_1"
                                                                name="r3_2" value="1">
                                                            <label for="score3_2_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_2_2"
                                                                name="r3_2" value="2">
                                                            <label for="score3_2_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_2_3"
                                                                name="r3_2" value="3">
                                                            <label for="score3_2_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_2_4"
                                                                name="r3_2" value="4">
                                                            <label for="score3_2_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_2_5"
                                                                name="r3_2" value="5">
                                                            <label for="score3_2_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- มีการเลือกวิธีวิเคราะห์ข้อมูลมีความเหมาะสมตามหลักการ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_3_1"
                                                                name="r3_3" value="1">
                                                            <label for="score3_3_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_3_2"
                                                                name="r3_3" value="2">
                                                            <label for="score3_3_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_3_3"
                                                                name="r3_3" value="3">
                                                            <label for="score3_3_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_3_4"
                                                                name="r3_3" value="4">
                                                            <label for="score3_3_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score3_3_5"
                                                                name="r3_3" value="5">
                                                            <label for="score3_3_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td><strong>ผลการดำเนินงานวิจัย</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ผลการวิเคราะห์ข้อมูลมีความเหมาะสม</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_1_1"
                                                                name="r4_1" value="1">
                                                            <label for="score4_1_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_1_2"
                                                                name="r4_1" value="2">
                                                            <label for="score4_1_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_1_3"
                                                                name="r4_1" value="3">
                                                            <label for="score4_1_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_1_4"
                                                                name="r4_1" value="4">
                                                            <label for="score4_1_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_1_5"
                                                                name="r4_1" value="5">
                                                            <label for="score4_1_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- การนำเสนอแนวทางมีความเหมาะสม</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_2_1"
                                                                name="r4_2" value="1">
                                                            <label for="score4_2_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_2_2"
                                                                name="r4_2" value="2">
                                                            <label for="score4_2_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_2_3"
                                                                name="r4_2" value="3">
                                                            <label for="score4_2_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_2_4"
                                                                name="r4_2" value="4">
                                                            <label for="score4_2_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_2_5"
                                                                name="r4_2" value="5">
                                                            <label for="score4_2_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ความเป็นไปได้ในการใช้ประโยชน์จริงจากโครงงานพิเศษ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_3_1"
                                                                name="r4_3" value="1">
                                                            <label for="score4_3_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_3_2"
                                                                name="r4_3" value="2">
                                                            <label for="score4_3_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_3_3"
                                                                name="r4_3" value="3">
                                                            <label for="score4_3_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_3_4"
                                                                name="r4_3" value="4">
                                                            <label for="score4_3_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_3_5"
                                                                name="r4_3" value="5">
                                                            <label for="score4_3_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ผลการดำเนินงานในภาพรวมตรงตามวัตถุประสงค์ที่ตั้งไว้</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_4_1"
                                                                name="r4_4" value="1">
                                                            <label for="score4_4_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_4_2"
                                                                name="r4_4" value="2">
                                                            <label for="score4_4_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_4_3"
                                                                name="r4_4" value="3">
                                                            <label for="score4_4_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_4_4"
                                                                name="r4_4" value="4">
                                                            <label for="score4_4_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_4_5"
                                                                name="r4_4" value="5">
                                                            <label for="score4_4_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- การสรุปผลการดำเนินงานมีความชัดเจน</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_5_1"
                                                                name="r4_5" value="1">
                                                            <label for="score4_5_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_5_2"
                                                                name="r4_5" value="2">
                                                            <label for="score4_5_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_5_3"
                                                                name="r4_5" value="3">
                                                            <label for="score4_5_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_5_4"
                                                                name="r4_5" value="4">
                                                            <label for="score4_5_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_5_5"
                                                                name="r4_5" value="5">
                                                            <label for="score4_5_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- มีข้อเสนอแนะที่ชัดเจน</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_6_1"
                                                                name="r4_6" value="1">
                                                            <label for="score4_6_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_6_2"
                                                                name="r4_6" value="2">
                                                            <label for="score4_6_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_6_3"
                                                                name="r4_6" value="3">
                                                            <label for="score4_6_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_6_4"
                                                                name="r4_6" value="4">
                                                            <label for="score4_6_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score4_6_5"
                                                                name="r4_6" value="5">
                                                            <label for="score4_6_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td><strong>การนำเสนอ</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ความน่าสนใจในการนำเสนอ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_1_1"
                                                                name="r5_1" value="1">
                                                            <label for="score5_1_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_1_2"
                                                                name="r5_1" value="2">
                                                            <label for="score5_1_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_1_3"
                                                                name="r5_1" value="3">
                                                            <label for="score5_1_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_1_4"
                                                                name="r5_1" value="4">
                                                            <label for="score5_1_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_1_5"
                                                                name="r5_1" value="5">
                                                            <label for="score5_1_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- การนำเสนอเข้าใจง่าย</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_2_1"
                                                                name="r5_2" value="1">
                                                            <label for="score5_2_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_2_2"
                                                                name="r5_2" value="2">
                                                            <label for="score5_2_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_2_3"
                                                                name="r5_2" value="3">
                                                            <label for="score5_2_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_2_4"
                                                                name="r5_2" value="4">
                                                            <label for="score5_2_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_2_5"
                                                                name="r5_2" value="5" class="score-radio">
                                                            <label for="score5_2_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- Power point</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_3_1"
                                                                name="r5_3" value="1">
                                                            <label for="score5_3_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_3_2"
                                                                name="r5_3" value="2">
                                                            <label for="score5_3_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_3_3"
                                                                name="r5_3" value="3">
                                                            <label for="score5_3_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_3_4"
                                                                name="r5_3" value="4">
                                                            <label for="score5_3_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_3_5"
                                                                name="r5_3" value="5" class="score-radio">
                                                            <label for="score5_3_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- การแต่งกายถูกต้องตามระเบียบ</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_4_1"
                                                                name="r5_4" value="1">
                                                            <label for="score5_4_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_4_2"
                                                                name="r5_4" value="2">
                                                            <label for="score5_4_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_4_3"
                                                                name="r5_4" value="3">
                                                            <label for="score5_4_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_4_4"
                                                                name="r5_4" value="4">
                                                            <label for="score5_4_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_4_5"
                                                                name="r5_4" value="5" class="score-radio">
                                                            <label for="score5_4_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- การตอบคำถาม</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_5_1"
                                                                name="r5_5" value="1">
                                                            <label for="score5_5_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_5_2"
                                                                name="r5_5" value="2">
                                                            <label for="score5_5_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_5_3"
                                                                name="r5_5" value="3">
                                                            <label for="score5_5_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_5_4"
                                                                name="r5_5" value="4">
                                                            <label for="score5_5_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score5_5_5"
                                                                name="r5_5" value="5" class="score-radio">
                                                            <label for="score5_5_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td><strong>รูปเล่ม</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ความถูกต้องในการจัดรูปเล่ม</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_1_1"
                                                                name="r6_1" value="1">
                                                            <label for="score6_1_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_1_2"
                                                                name="r6_1" value="2">
                                                            <label for="score6_1_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_1_3"
                                                                name="r6_1" value="3">
                                                            <label for="score6_1_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_1_4"
                                                                name="r6_1" value="4">
                                                            <label for="score6_1_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_1_5"
                                                                name="r6_1" value="5">
                                                            <label for="score6_1_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>- ความถูกต้องด้านภาษาที่ใช้</td>
                                                <div class="form-group clearfix">
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_2_1"
                                                                name="r6_2" value="1">
                                                            <label for="score6_2_1">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_2_2"
                                                                name="r6_2" value="2">
                                                            <label for="score6_2_2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_2_3"
                                                                name="r6_2" value="3">
                                                            <label for="score6_2_3">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_2_4"
                                                                name="r6_2" value="4">
                                                            <label for="score6_2_4">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" class="score-radio" id="score6_2_5"
                                                                name="r6_2" value="5" class="score-radio">
                                                            <label for="score6_2_5">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </div>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="6" class="text-center">คะแนนรวม</th>
                                                <td class="text-center" id="totalScore">0</td>
                                            </tr>
                                            <?php if (session()->get('type') == '2' || session()->get('type') == '5'): ?>
                                                <tr>
                                                    <th colspan="7" class="text-center" id="editBtn" name="editBtn">
                                                        <button class="btn btn-info" type="button"
                                                            onclick="open_edit()">แก้ไขข้อมูล</button>
                                                    </th>
                                                    <th colspan="7" class="text-center" id="submitBtn" name="submitBtn">
                                                        <button class="btn btn-primary" type="submit">บันทึก</button>
                                                        <button class="btn btn-danger" type="button"
                                                            onclick="resetRadioButtons()">รีเซ็ต</button>
                                                        <button class="btn btn-info" type="button"
                                                            onclick="close_edit()">ยกเลิก</button>
                                                    </th>
                                                </tr>
                                            <?php endif; ?>
                                        </tfoot>
                                    </form>
                                </table>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-3">
                            </div>
                            <div class="col-1">
                                <p>A(85-100)</p>
                            </div>
                            <div class="col-1">
                                <p>B+(80-84)</p>
                            </div>
                            <div class="col-1">
                                <p>B(70-74)</p>
                            </div>
                            <div class="col-1">
                                <p>C+(70-74)</p>
                            </div>
                            <div class="col-1">
                                <p>C(65-69)</p>
                            </div>
                            <div class="col-1">
                                <p>D+(60-64)</p>
                            </div>
                        </div>
                    </div>
                    <div class="overlay" id="overlay">
                        <i class="fas fa-2x fa-sync fa-spin"></i>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $(".overlay").show();

        // Wait for the DOM to be ready
        $(document).ready(function () {
            $(".overlay").hide();
            close_edit();

            set_radio();

            // Handle change events of any radio button with class "score-radio"
            $('.score-radio').change(function () {
                updateTotalScore();
            });

            // Function to update the total score

        });
    </script>
    <script>
        function resetRadioButtons() {
            // Get all radio buttons with class '.score-radio'
            var radioButtons = document.querySelectorAll('.score-radio');

            // Loop through radio buttons and uncheck the checked ones
            radioButtons.forEach(function (radioButton) {
                radioButton.checked = false;
            });
        }

        function open_edit() {
            $('#submitBtn').show();
            $('#editBtn').hide();
            $('.score-radio').prop('disabled', false);
        }
        function close_edit() {
            $('#submitBtn').hide();
            $('#editBtn').show();
            $('.score-radio').prop('disabled', true);
            set_radio();
        }
        function set_radio() {
            var scores = <?php echo json_encode($score); ?>;
            if (scores != null) {
                for (var key in scores) {
                    $('#' + key + '_' + scores[key]).prop('checked', true);
                    updateTotalScore();
                }
            }
        }
        function updateTotalScore() {
            var totalScore = 0;

            // Loop through all radio buttons and sum up the selected values
            $('.score-radio:checked').each(function () {
                totalScore += parseInt($(this).val(), 10);
            });

            // Update the total score in the table footer
            $('#totalScore').text(totalScore);
        }
    </script>
    <script>
        var project = <?php echo json_encode($project); ?>;
        var id_test = <?php echo json_encode($id_test); ?>;
        var type_tk = <?php echo json_encode($type_tk); ?>;
        $("#form_score").on('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "ต้องการบันทึกคะแนนใช่หรือไม่",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                confirmButtonText: "บันทึกคะแนน",
                cancelButtonText: "ยกเลิก",
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = new FormData(document.getElementById('form_score'));
                    var loadingIndicator = Swal.fire({
                        title: 'กำลังโหลด...',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    var scores = <?php echo json_encode($score); ?>;
                    if (scores == null) {
                        var url = '<?= base_url('teacher/scorepage/create/') ?>' + id_test + '/' + project.id_project + '/' + type_tk;
                    } else {
                        var url = '<?= base_url('teacher/scorepage/update/') ?>' + id_test + '/' + project.id_project + '/' + scores.id_score + '/' + type_tk;
                    }
                    $.ajax({
                        url: url,
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
            });
        });

        function handleErrorResponse(response) {
            if (response.validator) {
                let mes = ''; // Initialize message variable
                Object.keys(response.validator).forEach(element => {

                    if (response.validator[element]) {
                        let parts = element.split('_');
                        let result = parts[0].slice(1) + '_' + parts[1];
                        let topic = result.split('_');
                        mes += 'กรุณาลงคะแนนข้อที่ ' + topic[0] + '.' + topic[1] + '<br><hr/>';
                    }
                });
                Swal.fire({
                    title: mes,
                    icon: 'error',
                    showConfirmButton: true,
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