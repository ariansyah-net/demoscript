<div class="container mt-5">
<div class="row">
<div class="col-7">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item pb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.29132916096!2d106.72185033936266!3d-6.595188615477817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c44a0cd6aab5%3A0x301576d14feb9a0!2sBogor%2C+Kp.+Parung+Jambu%2C+Kota+Bogor%2C+Jawa+Barat!5e0!3m2!1sid!2sid!4v1561686200733!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<div class="mr-5"></div>
  <div class="col-sm-4">
    <?= form_open('contact/cek') ?>

  <div class="form-group">
    <?= form_label('Name', 'inbox_name') ?>
    <?= form_input('a', '', array('class' => 'form-control', 'required' => 'required')) ?>
  </div>
  <div class="form-group">
    <?= form_label('Email Address', 'inbox_email') ?>
    <?= form_input('b', '', array('class' => 'form-control', 'required' => 'required')) ?>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <?= form_label('Subject', 'inbox_subject') ?>
    <?= form_input('c', '', array('class' => 'form-control', 'required' => 'required')) ?>
  </div>
  <div class="form-group">
    <?= form_label('Message', 'inbox_message') ?>
    <textarea class="form-control h-25" rows="3" name="d" placeholder="write something.." required></textarea>
  </div>

  <div class="form-group">
    <?php echo $img; ?><div class='p-2'></div>
    <?= form_input('captcha', '', array('class' => 'form-control', 'placeholder' => '?', 'required' => 'required')) ?>
  </div>

  <?= form_button(['type' => 'submit', 'content' => '<i class="fas fa-paper-plane"></i> Send Message', 'class' => 'btn btn-danger']) ?>
  <?= form_close() ?>
  </div>

</div>
