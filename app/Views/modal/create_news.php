<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="overlay preloader">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header bg-info">
            <h4 class="modal-title" id="title_modal" name="title_modal"></h4>
        </div>
        <div class="modal-body">
            <form class="mb-3" id="form_news" action="javascript:void(0)" method="post"
                enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 mx-auto text-center border">
                            <a href="<?= base_url('dist/img/image-preview.png') ?>" data-toggle="lightbox"
                                id="image-preview-extra">
                                <img class="img-fluid mb-2" src="<?= base_url('dist/img/image-preview.png') ?>"
                                    alt="white sample" id="image-preview" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <label for="uploadImage" class="btn btn-block-tool btn-success btn-sm mb-2">อัปโหลดรูป</label>
                    <input type="file" id="uploadImage" name="uploadImage" style="display: none;" accept="image/*"
                        onchange="previewImage(this);">
                </div>
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
                <div class="form-group">
                    <label>รายละเอียดข่าวสาร</label>
                    <textarea class="form-control" rows="3" placeholder="กรอกรายละเอียด" id="detail_news"
                        name="detail_news" ></textarea>
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

    $("#form_news").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route");
        action_(urlRouteInput.value, 'form_news');
    });
</script>

<script>
    function previewImage(input) {
        var preview = document.getElementById('image-preview');
        var preview_extra = document.getElementById('image-preview-extra');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview_extra.href = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
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