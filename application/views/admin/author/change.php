<div class="card shadow mb-4">
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-arrow-down"></i> Change Author</h6>
      </a>
<div class="collapse show" id="collapseCardExample">
  <div class="card-body">
    <?= form_open_multipart('dashboard/change_author') ?>
      <?= form_hidden('id_auth', $ar['id_auth']) ?>
<!-- NAME -->
    <div class="form-group row">
    <?= form_label('Name', 'name', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <?= form_input('a', $ar['name'], ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- USERNAME -->
    <div class="form-group row">
    <?= form_label('Username', 'username', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-5">
    <?= form_input('b', $ar['username'], ['class' => 'form-control', 'readonly' => 'readonly']) ?>
    </div>
    </div>
<!-- PASSWORD -->
    <div class="form-group row">
    <?= form_label('Password', 'password', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-5">
    <?= form_password('c', '', ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- LEVEL -->
    <div class="form-group row">
    <?= form_label('Level', 'level', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-5">
    <select class="custom-select" name="d">
    <option value="<?= $ar['level'] ?>" selected><?= $ar['level'] ?></option>
    <option value="root">Super User</option>
    <option value="admin">Administrator</option>
    </select>
    </div>
    </div>
<!-- STATUS / ACTIVE -->
    <div class="form-group row">
    <?= form_label('Status', 'level', ['class' => 'col-sm-2 col-from-label']) ?>
    <div class="col-sm-10">
    <div class="custom-control custom-radio custom-control-inline">
    <?= form_radio(['class'=>'custom-control-input', 'name'=>'e', 'id'=>'Y'], 'Y', isset($ar['active']) && ($ar['active'] == 'Y') ? true : false) ?>
    <?= form_label('Active', 'Y', 'class="custom-control-label"') ?>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <?= form_radio(['class'=>'custom-control-input', 'name'=>'e', 'id'=>'N'], 'N', isset($ar['active']) && ($ar['active'] == 'N') ? true : false) ?>
    <?= form_label('Non Active', 'N', 'class="custom-control-label"') ?>
    </div>
    </div>
    </div>

<!--AVATAR -->
    <div class="form-group row">
    <?= form_label('Avatar', 'site_favicon', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="f">
    <?= form_label('Choose file ..', 'f', ['class' => 'custom-file-label', 'id' => 'customFile']) ?>
    </div>
    </div>
    </div>

<!-- IMAGE AVATAR -->
    <div class="form-group row">
    <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-5">
    <img class="img-fluid img-thumbnail" style="max-width:80px;" src="<?=base_url('asset/img/'.$ar['avatar'].' ') ?>">
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
