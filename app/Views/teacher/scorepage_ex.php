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
                        <h3 class="card-title"></h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="table_history" class="table table-hover table-bordered table-striped">
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
                                            <td>ความสำคัญ วัตถุประสงต์ ขอบเขต</td>
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
                                                        <input type="radio" class="score-radio" id="answer1_1_1" name="r1_1" value="1">
                                                        <label for="answer1_1_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_1_2" name="r1_1" value="2">
                                                        <label for="answer1_1_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_1_3" name="r1_1" value="3">
                                                        <label for="answer1_1_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_1_4" name="r1_1" value="4">
                                                        <label for="answer1_1_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_1_5" name="r1_1" value="5">
                                                        <label for="answer1_1_5">
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
                                                        <input type="radio" class="score-radio" id="answer1_2_1" name="r1_2" value="1">
                                                        <label for="answer1_2_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_2_2" name="r1_2" value="2">
                                                        <label for="answer1_2_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_2_3" name="r1_2" value="3">
                                                        <label for="answer1_2_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_2_4" name="r1_2" value="4">
                                                        <label for="answer1_2_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer1_2_5" name="r1_2" value="5">
                                                        <label for="answer1_2_5">
                                                        </label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>ทฤษฏีและงานวิจัยที่เกี่ยวข้อง</td>
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
                                                        <input type="radio" class="score-radio" id="answer2_1_1" name="r2_1" value="1">
                                                        <label for="answer2_1_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_1_2" name="r2_1" value="2">
                                                        <label for="answer2_1_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_1_3" name="r2_1" value="3">
                                                        <label for="answer2_1_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_1_4" name="r2_1" value="4">
                                                        <label for="answer2_1_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_1_5" name="r2_1" value="5">
                                                        <label for="answer2_1_5">
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
                                                        <input type="radio" class="score-radio" id="answer2_2_1" name="r2_2" value="1">
                                                        <label for="answer2_2_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_2_2" name="r2_2" value="2">
                                                        <label for="answer2_2_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_2_3" name="r2_2" value="3">
                                                        <label for="answer2_2_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_2_4" name="r2_2" value="4">
                                                        <label for="answer2_2_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer2_2_5" name="r2_2" value="5">
                                                        <label for="answer2_2_5">
                                                        </label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>วิธีการดำเนินงาน</td>
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
                                                        <input type="radio" class="score-radio" id="answer3_1_1" name="r3_1" value="1">
                                                        <label for="answer3_1_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_1_2" name="r3_1" value="2">
                                                        <label for="answer3_1_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_1_3" name="r3_1" value="3">
                                                        <label for="answer3_1_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_1_4" name="r3_1" value="4">
                                                        <label for="answer3_1_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_1_5" name="r3_1" value="5">
                                                        <label for="answer3_1_5">
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
                                                        <input type="radio" class="score-radio" id="answer3_2_1" name="r3_2" value="1">
                                                        <label for="answer3_2_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_2_2" name="r3_2" value="2">
                                                        <label for="answer3_2_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_2_3" name="r3_2" value="3">
                                                        <label for="answer3_2_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_2_4" name="r3_2" value="4">
                                                        <label for="answer3_2_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_2_5" name="r3_2" value="5">
                                                        <label for="answer3_2_5">
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
                                                        <input type="radio" class="score-radio" id="answer3_3_1" name="r3_3" value="1">
                                                        <label for="answer3_3_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_3_2" name="r3_3" value="2">
                                                        <label for="answer3_3_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_3_3" name="r3_3" value="3">
                                                        <label for="answer3_3_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_3_4" name="r3_3" value="4">
                                                        <label for="answer3_3_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer3_3_5" name="r3_3" value="5">
                                                        <label for="answer3_3_5">
                                                        </label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>ผลการดำเนินงานวิจัย</td>
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
                                                        <input type="radio" class="score-radio" id="answer4_1_1" name="r4_1" value="1">
                                                        <label for="answer4_1_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_1_2" name="r4_1" value="2">
                                                        <label for="answer4_1_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_1_3" name="r4_1" value="3">
                                                        <label for="answer4_1_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_1_4" name="r4_1" value="4">
                                                        <label for="answer4_1_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_1_5" name="r4_1" value="5">
                                                        <label for="answer4_1_5">
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
                                                        <input type="radio" class="score-radio" id="answer4_2_1" name="r4_2" value="1">
                                                        <label for="answer4_2_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_2_2" name="r4_2" value="2">
                                                        <label for="answer4_2_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_2_3" name="r4_2" value="3">
                                                        <label for="answer4_2_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_2_4" name="r4_2" value="4">
                                                        <label for="answer4_2_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_2_5" name="r4_2" value="5">
                                                        <label for="answer4_2_5">
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
                                                        <input type="radio" class="score-radio" id="answer4_3_1" name="r4_3" value="1">
                                                        <label for="answer4_3_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_3_2" name="r4_3" value="2">
                                                        <label for="answer4_3_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_3_3" name="r4_3" value="3">
                                                        <label for="answer4_3_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_3_4" name="r4_3" value="4">
                                                        <label for="answer4_3_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_3_5" name="r4_3" value="5">
                                                        <label for="answer4_3_5">
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
                                                        <input type="radio" class="score-radio" id="answer4_4_1" name="r4_4" value="1">
                                                        <label for="answer4_4_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_4_2" name="r4_4" value="2">
                                                        <label for="answer4_4_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_4_3" name="r4_4" value="3">
                                                        <label for="answer4_4_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_4_4" name="r4_4" value="4">
                                                        <label for="answer4_4_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_4_5" name="r4_4" value="5">
                                                        <label for="answer4_4_5">
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
                                                        <input type="radio" class="score-radio" id="answer4_5_1" name="r4_5" value="1">
                                                        <label for="answer4_5_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_5_2" name="r4_5" value="2">
                                                        <label for="answer4_5_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_5_3" name="r4_5" value="3">
                                                        <label for="answer4_5_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_5_4" name="r4_5" value="4">
                                                        <label for="answer4_5_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_5_5" name="r4_5" value="5">
                                                        <label for="answer4_5_5">
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
                                                        <input type="radio" class="score-radio" id="answer4_6_1" name="r4_6" value="1">
                                                        <label for="answer4_6_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_6_2" name="r4_6" value="2">
                                                        <label for="answer4_6_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_6_3" name="r4_6" value="3">
                                                        <label for="answer4_6_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_6_4" name="r4_6" value="4">
                                                        <label for="answer4_6_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer4_6_5" name="r4_6" value="5">
                                                        <label for="answer4_6_5">
                                                        </label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>การนำเสนอ</td>
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
                                                        <input type="radio" class="score-radio" id="answer5_1_1" name="r5_1" value="1">
                                                        <label for="answer5_1_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_1_2" name="r5_1" value="2">
                                                        <label for="answer5_1_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_1_3" name="r5_1" value="3">
                                                        <label for="answer5_1_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_1_4" name="r5_1" value="4" >
                                                        <label for="answer5_1_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_1_5" name="r5_1" value="5">
                                                        <label for="answer5_1_5">
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
                                                        <input type="radio" class="score-radio" id="answer5_2_1" name="r5_2" value="1">
                                                        <label for="answer5_2_1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_2_2" name="r5_2" value="2">
                                                        <label for="answer5_2_2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_2_3" name="r5_2" value="3">
                                                        <label for="answer5_2_3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_2_4" name="r5_2" value="4">
                                                        <label for="answer5_2_4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" class="score-radio" id="answer5_2_5" name="r5_2" value="5" class="score-radio">
                                                        <label for="answer5_2_5">
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
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    </div>

    <script>
        // Wait for the DOM to be ready
        $(document).ready(function () {
            // Handle change events of any radio button with class "score-radio"
            $('.score-radio').change(function () {
                updateTotalScore();
            });

            // Function to update the total score
            function updateTotalScore() {
                var totalScore = 0;

                // Loop through all radio buttons and sum up the selected values
                $('.score-radio:checked').each(function () {
                    totalScore += parseInt($(this).val(), 10);
                });

                // Update the total score in the table footer
                $('#totalScore').text(totalScore);
            }
        });
    </script>