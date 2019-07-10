<div class="card shadow mb-4">
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-arrow-down"></i> Change File</h6>
      </a>
<div class="collapse show" id="collapseCardExample">
  <div class="card-body">
    <?= form_open_multipart('dashboard/change_filemanager') ?>
    <input type='hidden' name='id' value='<?= $ar['id_filemanager'] ?>'>

<!-- FILE NAME -->
    <div class="form-group row">
    <?= form_label('File Name', 'name', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <?= form_input('a', $ar['f_name'], ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- UPLOAD FILE -->
    <div class="form-group row">
    <?= form_label('Upload File', 'down_filename', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="u">
    <?= form_label('Choose file..', 'u', ['class' => 'custom-file-label', 'id' => 'customFile']) ?>
    <small id="emailHelp" class="form-text text-muted">Note: max 10 mb file to upload</small>
    </div>
    </div>
    </div>
<!-- ICON FILE -->
    <div class="form-group row">
    <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-5">
    <img class="img-fluid img-thumbnail" style="max-width:100px;" src="<?=base_url('asset/source/'.$ar['f_filename'].' ') ?>">
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
