<div class="card shadow mb-4">
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-arrow-down"></i> Add Page List</h6>
      </a>
<div class="collapse show" id="collapseCardExample">
  <div class="card-body">
    <?= form_open_multipart('dashboard/change_page') ?>
      <input type='hidden' name='id' value='<?= $ar['id_page'] ?>'>

<!-- PAGE TITLE -->
    <div class="form-group row">
    <?= form_label('Title', 'page_title', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <?= form_input('a', $ar['page_title'], ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- PAGE TITLE -->
    <div class="form-group row">
    <?= form_label('Content', 'page_content', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <textarea class="form-control" rows="15" id="editor1" name="b"><?=$ar['page_content'] ?></textarea>
    </div>
    </div>

<!-- PAGE HITS -->
    <div class="form-group row">
    <?= form_label('Modify Hits', 'page_hits', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-2">
    <?= form_input('c', $ar['page_hits'], ['class' => 'form-control']) ?>
    </div>
    </div>

<!-- PAGE ACTIVE -->
    <div class="form-group row">
    <?= form_label('Status', 'level', ['class' => 'col-sm-2 col-from-label']) ?>
    <div class="col-sm-10">
    <div class="custom-control custom-radio custom-control-inline">
    <?= form_radio(['class'=>'custom-control-input', 'name'=>'d', 'id'=>'Y'], 'Y', isset($ar['page_active']) && ($ar['page_active'] == 'Y') ? true : false) ?>
    <?= form_label('Active', 'Y', 'class="custom-control-label"') ?>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <?= form_radio(['class'=>'custom-control-input', 'name'=>'d', 'id'=>'N'], 'N', isset($ar['page_active']) && ($ar['page_active'] == 'N') ? true : false) ?>
    <?= form_label('Non Active', 'N', 'class="custom-control-label"') ?>
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
<!-- ICON FILE -->
    <div class="form-group row">
    <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-5">
    <?php
    if($ar['page_img'] == ''){
      echo "<img class='img-fluid img-thumbnail' style='max-width:150px;' src='".base_url()."asset/img/noimage.png'> ";
    } else {
      echo "<a href='".base_url()."asset/img/$ar[page_img]'><img class='img-fluid img-thumbnail' style='max-width:150px;' src='".base_url()."asset/img/$ar[page_img]'></a>";
    }
    ?>
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
