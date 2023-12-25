<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="overlay preloader">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header bg-info">
            <h4 class="modal-title" id="title_modal" name="title_modal">เพิ่มการสอบ</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="mb-3" id="form_test" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>1. รายละเอียดสถานที่ เวลา และประเภทการสอบ</label>
                    <div class="row">
                        <div>
                            <p>วัน : </p>
                        </div>
                        <div class="col-sm-2 mr-2">
                            <input type="text" class="form-control" placeholder="วันที่สอบ" id="day_test"
                                name="day_test" disabled>
                        </div>
                        <div>
                            <p>ช่วงเวลา : </p>
                        </div>
                        <div class="col-sm-2 mr-2">
                            <input type="text" class="form-control" placeholder="วันที่สอบ" id="time_test"
                                name="time_test" disabled>
                        </div>
                        <div>
                            <p>สถานที่ : </p>
                        </div>
                        <div class="col-sm-3 mr-3">
                            <input type="text" class="form-control" placeholder="สถานที่" id="location" name="location"
                                required>
                        </div>
                        <div>
                            <p>ประเภทการสอบ : </p>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" id="type_test" name="type_test">
                                <option selected="selected" value="1">สอบหัวข้อ</option>
                                <option value="2">สอบ 70</option>
                                <option value="3">สอบ 100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label>2. โครงงานพิเศษที่สอบ</label>
                    <div class="row">
                        <p>เลือกโครงงานพิเศษ</p>
                        <div class="col-sm-9">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" id="project_select" name="project_select">
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-group" id="data_teacher" name="data_teacher">
                    <hr>
                    <label>3. คณะกรรมการประเมิน</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>ประธานกรรมการ </p>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" id="name_teacher_1" name="name_teacher_1">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>กรรมการคนที่ 1 </p>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" id="name_teacher_2" name="name_teacher_2">>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>กรรมการคนที่ 2 </p>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="กรรมการคนที่ 2" id="name_teacher_3"
                                name="name_teacher_3" disabled>
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <input type="text" id="day_test_value" name="day_test_value" hidden>
                <input type="text" id="time_test_value" name="time_test_value" hidden>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="submit" value="Submit" id="submit">สร้างการสอบ</button>
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

    $("#form_test").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route");
        action_(urlRouteInput.value, 'form_test');
    });
</script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
<script>
    document.getElementById('project_select').addEventListener('change', function () {
        // ทำสิ่งที่คุณต้องการเมื่อมีการเลือก
        var selectedValue = this.value;
        var data_project = <?php echo json_encode($data_project); ?>;
        data_project.forEach(element => {
            if (element.id_project == selectedValue) {
                document.getElementById('name_teacher_3').value = element.data_teacher.name_user + ' ' + element.data_teacher.lastname_user;
            }
        });
    });
    $(document).ready(function () {
        $(".modal-body #data_teacher").hide();
        var selectedValue = document.getElementById('project_select').value;
        var data_project = <?php echo json_encode($data_project); ?>;
        data_project.forEach(element => {
            if (element.id_project == selectedValue) {
                document.getElementById('name_teacher_3').value = element.data_teacher.name_user + ' ' + element.data_teacher.lastname_user;
            }
        })
    })
</script>
<script>
    document.getElementById('type_test').addEventListener('change', function () {
        // ทำสิ่งที่คุณต้องการเมื่อมีการเลือก
        var selectedTest = this.value;
        if (selectedTest == 1 || selectedTest == 2) {
            $(".modal-body #data_teacher").hide();
        } else {
            $(".modal-body #data_teacher").show();

        }
    });
</script>