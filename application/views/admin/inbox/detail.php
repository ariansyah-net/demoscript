<div class="card shadow mb-4">
<a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-arrow-down"></i> Reply Message</h6>
</a>
<div class="collapse show" id="collapseCardExample">
<div class="card-body">

<?= form_open('dashboard/detail_message/'.$rows['id_inbox'].' ') ?>

<!-- INBOX NAME-->
<div class="form-group row">
  <?= form_label('Message From', 'inbox_name', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
    <?= form_input('a', $rows['inbox_name'], ['class' => 'form-control', 'readonly' => 'readonly']) ?>
  </div>
</div>
<!-- INBOX EMAIL -->
<div class="form-group row">
  <?= form_label('Email', 'inbox_email', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
    <?= form_input('b', $rows['inbox_email'], ['class' => 'form-control', 'readonly' => 'readonly']) ?>
  </div>
</div>
<!-- INBOX SUBJECT -->
<div class="form-group row">
  <?= form_label('Subject', 'inbox_subject', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
    <?= form_input('c', $rows['inbox_subject'], ['class' => 'form-control', 'readonly' => 'readonly']) ?>
  </div>
</div>
<!--INBOX MESSAGE -->
  <div class="form-group row">
    <?= form_label('Message', 'content_desc', ['class' => 'col-sm-2 col-form-label']) ?>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="d" readonly><?=$rows['inbox_message'] ?></textarea>
    </div>
  </div>
<hr>
<!--INBOX REPLY -->
<div class="form-group row">
  <?= form_label('Reply', 'content_desc', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10">
    <textarea class="form-control" rows="3" name="e" placeholder="Write Something.."></textarea>
  </div>
</div>
<!--CONTENT BUTTON-->
<div class="form-group row">
  <?= form_label('', '', ['class' => 'col-sm-2 col-form-label']) ?>
  <div class="col-sm-10 p-3">
    <button type='submit' name='submit' class='btn btn-primary'><i class='fas fa-paper-plane'></i> Reply Message</button>
  </div>
</div>
<?= form_close() ?>
    </div>
  </div>
</div>
