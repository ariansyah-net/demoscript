<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="identities-tab" data-toggle="tab" href="#identities" role="tab" aria-controls="identities" aria-selected="true">Site Identities</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="topnav-tab" data-toggle="tab" href="#topnav" role="tab" aria-controls="topnav" aria-selected="false">Navigation & Footer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
  </li>
</ul>
<!-- =========================TAB 1=================================== -->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="identities" role="tabpanel" aria-labelledby="identities-tab">
<!-- IN TAB -->
    <div class="card shadow mb-4">
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i> Modify your site identities</h6>
      </a>
    <div class="collapse show" id="collapseCardExample">
    <div class="card-body">

<?= form_open_multipart('dashboard/settings') ?>
<input type='hidden' name='id' value=''>

<!-- SITE ICON-->
    <div class="form-group row">
    <?= form_label('Site Icon', 'site_icon', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-4">
    <?= form_input('icon', $ar['site_icon'], ['class' => 'form-control']) ?>
    </div>
    <div class="col-sm-1">
      <a target="_blank" class="btn btn-default" title="Explore Icons" href="https://fontawesome.com/icons"> <i class="fas fa-question"></i></a>
    </div>
    </div>
<!-- SITE NAME-->
    <div class="form-group row">
    <?= form_label('Site Name', 'site_name', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-8">
    <?= form_input('a', $ar['site_name'], ['class' => 'form-control']) ?>
    </div>
    </div>
<!-- SITE URL-->
    <div class="form-group row">
    <?= form_label('Site URL', 'site_url', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <?= form_input('b', $ar['site_url'], ['class' => 'form-control']) ?>
    </div>
    </div>
<!--SITE DESCRIPTION-->
    <div class="form-group row">
    <?= form_label('Meta Description', 'site_description', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <textarea class="form-control" rows="3" name="c" placeholder="write something.."><?=$ar['site_description'] ?></textarea>
    </div>
    </div>
<!--SITE MAPS-->
    <div class="form-group row">
    <?= form_label('Site Maps', 'site_maps', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <textarea class="form-control" rows="5" name="d" placeholder="write something.."><?=$ar['site_maps'] ?></textarea>
    </div>
    </div>
<!--SITE FAVICON-->
    <div class="form-group row">
    <?= form_label('Favicon', 'site_favicon', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="f">
    <?= form_label('Choose file ..', 'f', ['class' => 'custom-file-label']) ?>
    </div>
    </div>
    </div>
<!--SITE MAPS-->
    <div class="form-group row">
    <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
      <img src="<?=base_url('asset/img/'.$ar['site_favicon'].' ') ?>">
    </div>
    </div>

    </div><!--end card-body-->
  </div><!--end collapse-->
</div><!--end shadow-->

</div><!--end tab identities-->


<!-- ==========================TAB 2====================================== -->

<div class="tab-pane fade" id="topnav" role="tabpanel" aria-labelledby="topnav-tab">

  <div class="card shadow mb-4">
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i> Top Navigation Modify</h6>
    </a>
  <div class="collapse show" id="collapseCardExample">
  <div class="card-body">

<!--LEFT MENU-->
  <div class="form-group row">
  <?= form_label('Left Menu', 'site_description', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
  <textarea class="form-control" id="editor1" rows="7" name="g" placeholder="write something.."><?=$ar['site_left_menu'] ?></textarea>
  </div>
  </div>
<!--RIGHT MENU-->
  <div class="form-group row">
  <?= form_label('Right Menu', 'site_description', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
  <textarea class="form-control" rows="8" name="h" placeholder="write something.."><?=$ar['site_right_menu'] ?></textarea>
  </div>
  </div>
<!--FOOTER INFO-->
  <div class="form-group row">
  <?= form_label('Footer Info', 'site_footer', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
  <textarea class="form-control" rows="3" name="e" placeholder="write something.."><?=$ar['site_footer'] ?></textarea>
  </div>
  </div>

</div><!--end card-body-->
</div><!--end collapse-->
</div><!--end shadow-->


</div><!--end tab topnav-->




<!-- ===========================TAB 3==================================== -->
<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">


<div class="card shadow mb-4">
<a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-terminal"></i> App Info</h6>
</a>
<div class="collapse show" id="collapseCardExample">
<div class="card-body">

  <div class="card text-white bg-dark">
    <div class="card-body">
      <h6 class="card-title"><strong>New Release A1 </strong></h6>
      <p class="card-text">You can see documentation on button link bellow..</p>
      <a target="_blank" href="https://ariansyah.net/demoscript" class="btn btn-info"><i class="fas fa-book"></i> View Docs</a>
    </div>
  </div>


</div><!--end card-body-->
</div><!--end collapse-->
</div><!--end shadow-->

</div><!--end tab about-->

</div>



<!-- ====================ACTION========================== -->

<div class="card mb-4">

<!--BUTTON-->
    <div class="form-group row">
    <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-12 text-center">
    <button type='submit' name='submit' class='btn btn-primary'>
    <i class='fas fa-save'></i> Save Settings</button>
    </div>
    </div>

</div>
<?= form_close() ?>
