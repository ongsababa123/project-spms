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
                                style="width: 100%;">
                                <option selected="selected">จันทร์</option>
                                <option>อังคาร</option>
                                <option>พุธ</option>
                                <option>พฤหัสบดี</option>
                                <option>ศุกร์</option>
                            </select>
                        </div>
                        <div>
                            <p>ช่วงเวลา : </p>
                        </div>
                        <div class="col-sm-2 mr-2">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
                                <option selected="selected">09:00 - 10:00</option>
                                <option>10:00 - 11:00</option>
                                <option>11:00 - 12:00</option>
                                <option>13:00 - 14:00</option>
                                <option>14:00 - 15:00</option>
                                <option>15:00 - 16:00</option>
                                <option>16:00 - 17:00</option>
                            </select>
                        </div>
                        <div>
                            <p>สถานที่ : </p>
                        </div>
                        <div class="col-sm-2 mr-3">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
                                <option selected="selected">ห้องประชุม</option>
                                <option>ห้องนอน</option>
                            </select>
                        </div>
                        <div>
                            <p>ประเภทการสอบ : </p>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
                                <option selected="selected">สอบหัวข้อ</option>
                                <option>สอบ 70</option>
                                <option>สอบ 100</option>
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
                                style="width: 100%;">
                                <option selected="selected">โครงงานที่ 1</option>
                                <option>โครงงานที่ 2</option>
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
                            <input type="text" class="form-control" placeholder="กรรมการคนที่ 2"
                                id="name_project_thai" name="name_project_thai" disabled>
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