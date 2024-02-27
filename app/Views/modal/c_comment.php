<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-info">
            <h4 class="modal-title" id="title_modal__" name="title_modal__">คอมเม้นที่ส่งกลับ</h4>
        </div>
        <div class="modal-body">
            <form class="mb-3" id="form_c_comment" action="javascript:void(0)" method="post"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <h6>คอมเม้น</h6>
                            <textarea class="form-control" id="comment" name="comment" rows="5"
                                placeholder="กรอกคอมเม้นที่ส่งกลับ"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <h6>เลือกไฟล์</h6>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" accept=".pdf"
                                    data-max-size="20971520" name="file">
                                <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
                            </div>
                            <h6 class="gray-text">• pdf file</h6>
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route_file" name="url_route_file" hidden>
                <input type="text" id="url_route_file_tk" name="url_route_file_tk" hidden>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- bs-custom-file-input -->
<script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<script>
    $("#form_c_comment").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route_file");
        const url_route_file_tk = document.getElementById("url_route_file_tk");
        if (url_route_file_tk.value != "") {
            $.ajax({
                url: '<?= base_url('/teacher/progress/changestatus/file/') ?>' + url_route_file_tk.value,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
            });
        }
        action_(urlRouteInput.value, 'form_c_comment');
    });
</script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>