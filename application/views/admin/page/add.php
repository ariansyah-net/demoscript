<div class="card shadow mb-4">
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-arrow-down"></i> Add Page List</h6>
      </a>
<div class="collapse show" id="collapseCardExample">
  <div class="card-body">
    <?= form_open_multipart('dashboard/add_page') ?>

<!-- PAGE TITLE -->
    <div class="form-group row">
    <?= form_label('Title', 'page_title', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <?= form_input('a', '', ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- PAGE TITLE -->
    <div class="form-group row">
    <?= form_label('Content', 'page_content', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <textarea class="form-control" rows="15" id="editor1" name="b"></textarea>
    </div>
    </div>

<!-- PAGE HITS -->
    <div class="form-group row">
    <?= form_label('Modify Hits', 'page_hits', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-2">
    <?= form_input('c', '', ['class' => 'form-control']) ?>
    </div>
    </div>

<!-- PAGE ACTIVE -->
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
<!-- PAGE IMAGE -->
    <div class="form-group row">
    <?= form_label('Image / Cover', 'page_img', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="e">
    <?= form_label('Choose file..', 'e', ['class' => 'custom-file-label', 'id' => 'customFile']) ?>
    <small id="emailHelp" class="form-text text-muted">Note: max 1 mb file to upload</small>
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
