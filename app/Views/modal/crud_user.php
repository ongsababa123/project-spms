<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="overlay preloader">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header bg-info">
            <h4 class="modal-title" id="title_modal" name="title_modal"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="mb-3" id="form_user" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row" id="customSwitch_status">
                        <div class="col-sm-12">
                            <div class="form-group" id="customSwitch">
                                <div
                                    class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                        name="customSwitch3" onclick="change_status()">
                                    <label class="custom-control-label" for="customSwitch3"
                                        id="LabelcustomSwitch3"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>ชื่อ</label>
                            <input type="text" class="form-control" placeholder="ชื่อ" id="name_user" name="name_user"
                                required>
                        </div>
                        <div class="col-sm-4">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="นามสกุล" id="lastname_user"
                                name="lastname_user" required>
                        </div>
                        <div class="col-sm-4">
                            <label>เบอร์โทรศํพท์</label>
                            <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone_user"
                                name="phone_user" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>อีเมล์</label>
                            <input type="text" class="form-control" placeholder="รหัสผ่าน" id="email_user"
                                name="email_user" required>
                        </div>
                        <div class="col-sm-2" id="div_room">
                            <label>ห้อง</label>
                            <input type="text" class="form-control" placeholder="ห้อง" id="room_user"
                                name="room_user" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>รหัสผ่าน </label>
                            <p id="text_password" name="text_password">(ถ้าไม่เปลี่ยนรหัสผ่านไม่ต้องกรอก)</p>
                            <input type="text" class="form-control" placeholder="รหัสผ่าน" id="password" name="password">
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="submit" value="Submit"
                        id="submit">ยืนยัน</button>
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

    $("#form_user").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route");
        action_(urlRouteInput.value, 'form_user');
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
    function change_status() {
        const isChecked = document.getElementById("customSwitch3").checked;
        if (isChecked) {
            $(".modal-body #LabelcustomSwitch3").text("เปิดใช้งาน");
        } else {
            $(".modal-body #LabelcustomSwitch3").text("ปิดใช้งาน");
        }
    }
</script>