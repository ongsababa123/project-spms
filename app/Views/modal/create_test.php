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
            <form class="mb-3" id="form_tk" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>1. รายละเอียดสถานที่ เวลา และประเภทการสอบ</label>
                    <div class="row">
                        <div>
                            <p>วัน : </p>
                        </div>
                        <div class="col-sm-2 mr-2">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" id="day_select" name="day_select">
                                <option selected="selected" value="monday">จันทร์</option>
                                <option value="tuesday">อังคาร</option>
                                <option value="wednesday">พุธ</option>
                                <option value="thursday">พฤหัสบดี</option>
                                <option value="friday">ศุกร์</option>
                            </select>
                        </div>
                        <div>
                            <p>ช่วงเวลา : </p>
                        </div>
                        <div class="col-sm-2 mr-2">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" id="time_select" name="time_select">
                                <option selected="selected" value="9">09:00 - 10:00</option>
                                <option value="10">10:00 - 11:00</option>
                                <option value="11">11:00 - 12:00</option>
                                <option value="13">13:00 - 14:00</option>
                                <option value="14">14:00 - 15:00</option>
                                <option value="15">15:00 - 16:00</option>
                                <option value="16">16:00 - 17:00</option>
                            </select>
                        </div>
                        <div>
                            <p>สถานที่ : </p>
                        </div>
                        <div class="col-sm-3 mr-3">
                            <input type="text" class="form-control" placeholder="สถานที่" id="location" name="location">
                        </div>
                        <div>
                            <p>ประเภทการสอบ : </p>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
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
                <hr>
                <div class="form-group">
                    <label>3. คณะกรรมการประเมิน</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>ประธานกรรมการ </p>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>กรรมการคนที่ 1 </p>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
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
        </div>
        <input type="text" id="url_route" name="url_route" hidden>
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

    $("#form_tk").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route");
        // action_(urlRouteInput.value, 'form_tk');
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
</script>
<script>
    $(document).ready(function () {
        // ทำสิ่งที่คุณต้องการเมื่อมีการเลือก
        var selectedValue = document.getElementById('project_select').value;
        var data_project = <?php echo json_encode($data_project); ?>;
        data_project.forEach(element => {
            if (element.id_project == selectedValue) {
                document.getElementById('name_teacher_3').value = element.data_teacher.name_user + ' ' + element.data_teacher.lastname_user;
            }
        })
    })
</script>