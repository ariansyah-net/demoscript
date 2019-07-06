<div class="card shadow mb-4">
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-arrow-down"></i> Add Author</h6>
      </a>
<div class="collapse show" id="collapseCardExample">
  <div class="card-body">
    <?= form_open_multipart('dashboard/add_download') ?>

<!-- TITLE NAME -->
    <div class="form-group row">
    <?= form_label('File Name', 'name', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <?= form_input('a', '', ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- TYPE FILE -->
  <div class="form-group row">
    <?= form_label('File Type', 'level', ['class' => 'col-sm-2 col-form-label']) ?>
      <div class="col-sm-5">
        <select class="custom-select" name="b">
          <option value="" selected>Options</option>
            <option value="vid">Video</option>
              <option value="mp3">MP3</option>
                <option value="zip">WinZip</option>
                  <option value="rar">WinRar</option>
                    <option value="images">Images</option>
                      <option value="text">Text</option>
                        <option value="css">CSS</option>
                          <option value="html">HTML</option>
                            <option value="pdf">PDF</option>
                              <option value="xlsx">Excel</option>
                                <option value="docx">Word</option>
                                  <option value="ppt">Powerpoint</option>
                                    <option value="psd">Photoshop</option>
                                      <option value="cdr">CorelDraw</option>
                                        <option value="other">Other</option>
                                      </select>
                                  </div>
                              </div>
<!-- DOWNLOAD HITS -->
    <div class="form-group row">
    <?= form_label('Modify Hits', 'down_hits', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-2">
    <?= form_input('c', '', ['class' => 'form-control']) ?>
    </div>
    </div>

<!-- STATUS / ACTIVE -->
    <div class="form-group row">
    <?= form_label('Status', 'level', ['class' => 'col-sm-2 col-from-label']) ?>
    <div class="col-sm-10">
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" value="Y" id="Y" name="d" class="custom-control-input">
    <?= form_label('Active', 'Y', ['class' => 'custom-control-label']) ?>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" value="N" id="N" name="d" class="custom-control-input">
    <?= form_label('Non Active', 'N', ['class' => 'custom-control-label']) ?>
    </div>
    </div>
    </div>
<!-- DOWNLOAD FILE -->
    <div class="form-group row">
    <?= form_label('Upload File', 'down_filename', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="ar">
    <?= form_label('Choose file..', 'ar', ['class' => 'custom-file-label', 'id' => 'customFile']) ?>
    <small id="emailHelp" class="form-text text-muted">Note: max 10 mb file to upload</small>
    </div>
    </div>
    </div>

<!--CONTENT BUTTON-->
    <div class="form-group row">
      <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
      <div class="col-sm-10 p-3">
        <button type='submit' name='submit' class='btn btn-primary'><i class='fa fa-save'></i> Save Data</button>
      </div>
    </div>

<?= form_close() ?>

    </div>
  </div>
</div>
