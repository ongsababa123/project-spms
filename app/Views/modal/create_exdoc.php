<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="overlay preloader">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header bg-info">
            <h4 class="modal-title" id="title_modal" name="title_modal"></h4>
        </div>
        <div class="modal-body">
            <form class="mb-3" id="form_ex_doc" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <label>เลือกประเภท</label>
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                            style="width: 100%;" id="type_doc" name="type_doc">
                            <option selected="selected" value="1">ทก.01</option>
                            <option value="2">ทก.02</option>
                            <option value="3">ทก.03</option>
                            <option value="4">ทก.04</option>
                            <option value="5">ทก.05</option>
                            <option value="6">คู่มือโครงงาน</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>แนบไฟล์</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_ex_doc" data-max-size="20971520"
                                    name="file_ex_doc">
                                <label class="custom-file-label" for="customFile">แนบไฟล์</label>
                            </div>
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

    $("#form_ex_doc").on('submit', function (e) {
        e.preventDefault();
        const urlRouteInput = document.getElementById("url_route");
        action_(urlRouteInput.value, 'form_ex_doc');
    });
</script>
<script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>