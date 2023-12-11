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
                    <div class="row">
                        <div class="col-sm-4">
                            <p>ชื่อ</p>
                            <input type="text" class="form-control" placeholder="ชื่อ" id="name_user"
                                name="name_user">
                        </div>
                        <div class="col-sm-4">
                            <p>นามสกุล</p>
                            <input type="text" class="form-control" placeholder="นามสกุล" id="lastname_user"
                                name="lastname_user">
                        </div>
                        <div class="col-sm-4">
                            <p>เบอร์โทรศํพท์</p>
                            <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone_user"
                                name="phone_user">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>อีเมล์</p>
                            <input type="text" class="form-control" placeholder="รหัสผ่าน" id="email_user"
                                name="email_user">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>รหัสผ่าน</p>
                            <input type="text" class="form-control" placeholder="รหัสผ่าน" id="password"
                                name="password">
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="submit" value="Submit" id="submit">ยืนยัน</button>
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