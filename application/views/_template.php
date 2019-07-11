<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url('asset/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('asset/awesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?=base_url('asset/css/style.css') ?>">
    <?php $query = $this->db->get('settings');foreach ($query->result_array() as $ar) {
    echo "<title>$ar[site_name]</title><link rel='shortcut icon' href='".base_url('asset/img/')."$ar[site_favicon]' >";}?>
    <style>html{scroll-behavior: smooth;}</style>
  </head>
  <body>
  	<?php $this->load->view('_header') ?>
    <?php $this->load->view('_partial/flash_message') ?>
    <?php $this->load->view('_section') ?>
    <div class="main"><?php $this->load->view($main_view) ?></div>
  	<?php $this->load->view('_footer') ?>
    <script src="<?=base_url('asset/js/jquery-3.4.1.slim.min.js')?>"></script>
    <script src="<?=base_url('asset/js/popper.min.js')?>"></script>
    <script src="<?=base_url('asset/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript">
      $(function() {
         $('#flash').delay(500).slideDown('normal', function() {
            $(this).delay(2500).slideUp();
         });
      });
    </script>
  </body>
</html>
