<div class="form-group">
    <label>1.5 คณะกรรมการประเมิน</label>
    <div class="row">
        <div class="col-sm-3">
            <p>ประธานกรรมการ</p>
        </div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="ประธานกรรมการ" id="chairman" name="chairman">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <p>กรรมการ ท่านที่ 1</p>
        </div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="กรรมการคนที่ 1" id="director_1" name="director_1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <p>กรรมการ ท่านที่ 2</p>
        </div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="กรรมการคนที่ 2" id="director_2" name="director_2">
        </div>
    </div>
</div>
<label>1.6 แนบไฟล์รายงานบทที่ 1-5 และไฟล์ที่จะนำเสนอ</label>
<div id="file_tk05">
    <div class="form-group">
        <p>เลือกไฟล์รายงานบทที่ 1-5</p>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="file_project_tk05" accept=".pdf" data-max-size="20971520"
                name="file_project_tk05">
            <label class="custom-file-label" for="customFile">เลือกไฟล์บทที่ 1-5</label>
        </div>
    </div>
    <div class="form-group">
        <p>เลือกไฟล์นำเสนอ</p>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="file_present_tk05" accept="" data-max-size="20971520"
                name="file_present_tk05">
            <label class="custom-file-label" for="customFile">เลือกไฟล์นำเสนอ</label>
        </div>
    </div>
</div>
<div class="row" id="file_read_tk05">
    <div class="col-md-2">
        <div class="form-group">
            <p>ไฟล์รายงานบทที่ 1-5</p>
            <a class="btn btn-app bg-danger" id="tk_05_file_read_1">
                <i class="fas fa-file-pdf"></i> ไฟล์รายงานบทที่ 1-5
            </a>
        </div>
    </div>
    <div class="col-md-2" id="tk_05_file_present">
        <div class="form-group">
            <p>ไฟล์นำเสนอ</p>
            <a class="btn btn-app bg-danger" id="tk_05_file_read_2">
                <i class="fas fa-file-alt"></i> ไฟล์นำเสนอ
            </a>
        </div>
    </div>
    <div class="col-md-1" id="tk_05_score">
        <div class="form-group">
            <p>คะแนนที่ได้</p>
            <a class="btn btn-app bg-info" id="tk_05_score_read">
                <i class="fas fa-star"></i> คะแนน
            </a>
        </div>
    </div>
</div>