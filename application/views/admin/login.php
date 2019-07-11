<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DemoScript | Login</title>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('asset/admin/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('asset/admin/css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <?php $this->load->view('_partial/flash_message') ?>
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3 d-lg-block"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">WELCOME</h1>
                  </div>
                  <?= form_open('ar503'); ?>
                    <div class="form-group">
                      <?= form_input('username', $input->username, array('class' => 'form-control form-control-user', 'placeholder' => 'Username')) ?>
                    </div>
                    <div class="form-group">
                      <?= form_password('password', $input->password, array('class' => 'form-control form-control-user', 'id' => 'exampleInputPassword', 'placeholder' => 'Password')) ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                  <?= form_close(); ?>
                  <hr>
                  <div class="text-center">
                    <!-- <a class="small" href="">Forgot Password?</a> -->
                    <a class="small" href="#" data-toggle="modal" data-target="#logoutModal">
                      Forgot Password?
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Problem to Login?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">if there is a problem when logging in, you can contact the admin using the contact form. </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('contact')?>">Contact</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('asset/admin/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('asset/admin/js/sb-admin-2.min.js')?>"></script>
</body>
</html>
