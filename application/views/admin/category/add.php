<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus"></i> Add Demo</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">


<?= form_open('dashboard/add_category') ?>


<!-- CATEGORY NAME -->
  <div class="form-group row">
  <?= form_label('Category Name', 'category_name', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-8">
  <?= form_input('a', '', ['class' => 'form-control']) ?>
  </div>
  </div>
<!-- BUTTON CATEGORY -->
  <div class="form-group row">
  <?= form_label('Button Class', 'button', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-3">
  <?= form_input('b', '', ['class' => 'form-control', 'placeholder' => 'ex : btn-primary']) ?>
  </div>
  </div>
<!-- ICON CATEGORY-->
  <div class="form-group row">
  <?= form_label('Icon Class', 'icon', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-3">
  <?= form_input('c', '', ['class' => 'form-control', 'placeholder' => 'ex : fab fa-bootstrap']) ?>
  </div>
  </div>
<!--CATEGORY BUTTON-->
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
