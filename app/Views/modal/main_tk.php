<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="overlay" id="overlay">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header bg-info">
            <h4 class="modal-title" id="title_modal" name="title_modal"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="mb-3" id="form_tk" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <h3>1. ข้อมูลขั้นต้นของโครงงานพิเศษ</h3>
                <hr>
                <div class="form-group">
                    <label>1.1 ชื่อโครงงานพิเศษ</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>(ภาษาไทย) : </p>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="ชื่อโครงงานพิเศษภาษาไทย"
                                id="name_project" name="name_project" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>(ภาษาอังกฤษ) : </p>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="ชื่อโครงงานพิเศษภาษาอังกฤษ"
                                id="name_project_eng" name="name_project_eng" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label>1.2 ชื่อนักศึกษาผู้ทำโครงงานพิเศษ</label>
                    <p>นักศึกษาคนที่ 1</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>ชื่อ</p>
                            <input type="text" class="form-control" placeholder="ชื่อนักศึกษา" id="name_student_1"
                                name="name_student_1" required disabled>
                        </div>
                        <div class="col-sm-4">
                            <p>นามสกุล</p>
                            <input type="text" class="form-control" placeholder="นามสกุลนักศึกษา"
                                id="lastname_student_1" name="lastname_student_1" required disabled>
                        </div>
                        <div class="col-sm-4">
                            <p>อีเมล์</p>
                            <input type="text" class="form-control" placeholder="อีเมล์" id="email_student_1"
                                name="email_student_1" required disabled>
                            <input type="text" class="form-control" placeholder="อีเมล์" id="email_student_1"
                                name="email_student_1" required hidden>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <p>เบอร์โทรศํพท์</p>
                            <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone_student_1"
                                name="phone_student_1" required disabled>
                        </div>
                        <div class="col-sm-1">
                            <p>ห้อง</p>
                            <input type="number" class="form-control" placeholder="ห้อง" id="room_student_1"
                                name="room_student_1" required disabled>
                        </div>
                    </div>
                    <hr>
                    <p>นักศึกษาคนที่ 2</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>ชื่อ</p>
                            <input type="text" class="form-control" placeholder="ชื่อนักศึกษา" id="name_student_2"
                                name="name_student_2">
                        </div>
                        <div class="col-sm-4">
                            <p>นามสกุล</p>
                            <input type="text" class="form-control" placeholder="นามสกุลนักศึกษา"
                                id="lastname_student_2" name="lastname_student_2">
                        </div>
                        <div class="col-sm-4">
                            <p>อีเมล์</p>
                            <input type="text" class="form-control" placeholder="อีเมล์" id="email_student_2"
                                name="email_student_2">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <p>เบอร์โทรศํพท์</p>
                            <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone_student_2"
                                name="phone_student_2">
                        </div>
                        <div class="col-sm-1">
                            <p>ห้อง</p>
                            <input type="number" class="form-control" placeholder="ห้อง" id="room_student_2"
                                name="room_student_2">
                        </div>
                    </div>
                    <hr>
                    <p>นักศึกษาคนที่ 3</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>ชื่อ</p>
                            <input type="text" class="form-control" placeholder="ชื่อนักศึกษา" id="name_student_3"
                                name="name_student_3">
                        </div>
                        <div class="col-sm-4">
                            <p>นามสกุล</p>
                            <input type="text" class="form-control" placeholder="นามสกุลนักศึกษา"
                                id="lastname_student_3" name="lastname_student_3">
                        </div>
                        <div class="col-sm-4">
                            <p>อีเมล์</p>
                            <input type="text" class="form-control" placeholder="อีเมล์" id="email_student_3"
                                name="email_student_3">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <p>เบอร์โทรศํพท์</p>
                            <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone_student_3"
                                name="phone_student_3">
                        </div>
                        <div class="col-sm-1">
                            <p>ห้อง</p>
                            <input type="number" class="form-control" placeholder="ห้อง" id="room_student_3"
                                name="room_student_3">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                            <p>ภาควิชา</p>
                            <input type="text" class="form-control" placeholder="" id="department" name="department"
                                required>
                        </div>
                        <div class="col-sm-4">
                            <p>กลุ่มวิชา</p>
                            <input type="text" class="form-control" placeholder="" id="subject_group"
                                name="subject_group" required>
                        </div>
                        <div class="col-sm-1">
                            <p>ภาคเรียนที่</p>
                            <input type="number" class="form-control" placeholder="" id="semester" name="semester"
                                required>
                        </div>
                        <div class="col-sm-2">
                            <p>ปีการศึกษาที่</p>
                            <input type="number" class="form-control" placeholder="" id="learn_year" name="learn_year"
                                required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>1.3 ชื่ออาจารย์ที่ปรึกษาโครงงานพิเศษ</label>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>อาจารย์ที่ปรึกษา </p>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control select2bs4" style="width: 100%;" id="select_teacher"
                                        name="select_teacher">
                                        <?php foreach ($data_teacher as $key => $value): ?>
                                            <option value="<?= $value['email_user'] ?>">
                                                <?= $value['name_user'] . ' ' . $value['lastname_user'] .' [จำนวนโครงงานพิเศษ '. $value['project_count'] . ']'?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>1.4 ชื่ออาจารย์ที่ปรึกษาร่วม</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>อาจารย์ที่ปรึกษาร่วมคนที่ 1 </p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="อาจารย์ที่ปรึกษาร่วมคนที่ 1"
                                    id="name_consult_1" name="name_consult_1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>อาจารย์ที่ปรึกษาร่วมคนที่ 2 </p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="อาจารย์ที่ปรึกษาร่วมคนที่ 2"
                                    id="name_consult_2" name="name_consult_2">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="tk_01">
                        <?= $this->include("modal/tk_01"); ?>
                    </div>
                    <div id="tk_02">
                        <?= $this->include("modal/tk_02"); ?>
                    </div>
                    <div id="tk_03">
                        <?= $this->include("modal/tk_03"); ?>
                    </div>
                    <div id="tk_04">
                        <?= $this->include("modal/tk_04"); ?>
                    </div>
                    <div id="tk_05">
                        <?= $this->include("modal/tk_05"); ?>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="submit" value="Submit" id="submit">ส่ง</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".overlay").hide();
    });

    $("#form_tk").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route");
        action_(urlRouteInput.value, 'form_tk');
    });
</script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<!-- Select2 -->
<script src="<?= base_url('plugins/select2/js/select2.full.min.js') ?>"></script>
<script>
    $('.select2').select2()
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
</script>