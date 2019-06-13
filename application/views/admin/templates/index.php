<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $title ?></title>
  <link href="<?= base_url('/asset/img/favicon.gif')?>" rel="shortcut icon" type="image/gif"/>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('asset/admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('asset/admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('asset/admin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php $this->load->view('admin/templates/sidebar')?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <?php $this->load->view('admin/templates/navbar')?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php $this->load->view('_partial/flash_message') ?>

          <?php $this->load->view($main_view) ?>

        </div><!-- /.container-fluid -->
      </div><!-- End of Main Content -->

      <?php $this->load->view('admin/templates/footer')?>

    </div><!-- End of Content Wrapper -->
  </div><!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('asset/admin/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('asset/admin/js/sb-admin-2.min.js')?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('asset/admin/vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?= base_url('asset/admin/vendor/chart.js/Chart.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('asset/admin/js/demo/datatables-demo.js')?>"></script>
  <script src="<?= base_url('asset/admin/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?= base_url('asset/admin/js/demo/chart-area-demo.js')?>"></script>
  <script src="<?= base_url('asset/admin/js/demo/chart-pie-demo.js')?>"></script>

</body>

</html>
