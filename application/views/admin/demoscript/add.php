<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus"></i> Add Demo</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">


<?= form_open_multipart('dashboard/add_demoscript') ?>

<!-- CATEGORY ID -->
  <div class="form-group row">
    <?= form_label('Label', 'id_category', ['class'=>'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
      <select name='a' class='form-control' required>
        <option value='' selected> Options </option>
        <?php foreach ($record->result_array() as $row){ echo "<option value='$row[id_category]'>$row[category_name]</option>"; } ?>
      </select>
    </div>
  </div>
<!-- CONTENT TITLE -->
  <div class="form-group row">
    <?= form_label('Title', 'content_title', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
      <?= form_input('b', '', ['class' => 'form-control']) ?>
    </div>
  </div>
<!--  CONTENT MAIN -->
  <div class="form-group row">
    <?= form_label('Main Content', 'content_main', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
      <textarea class="form-control" rows="15" name="c"></textarea>
    </div>
  </div>
<!--CONTENT LINK-->
  <div class="form-group row">
    <?= form_label('Link', 'content_link', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
      <?= form_input('d', '', ['class' => 'form-control', 'placeholder' => 'https://ariansyah.net']) ?>
    </div>
  </div>

<!-- CONTENT IMAGE -->
<div class="form-group row">
  <?= form_label('Upload Cover', 'content_img', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
    <input type='file' class='form-control' name='e'>
  </div>
</div>
<!--CONTENT HITS-->
  <div class="form-group row">
    <?= form_label('Hits View', 'content_hits', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-3">
      <?= form_input('f', '', ['class' => 'form-control', 'placeholder' => '123']) ?>
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
