<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
            <?php $jmlh = $this->db->query("SELECT * FROM inbox where inbox_read='N'")->num_rows(); ?>
              <span class="badge badge-danger badge-counter"><?php echo $jmlh; ?></span>
                  </a>
  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
    <h6 class="dropdown-header">Message Center</h6>
      <?php
        $pesan = $this->demo_model->new_message(10);
        foreach ($pesan->result_array() as $row) {
          $msg = substr($row['inbox_message'],0,35);
          $time = cek_terakhir($row['inbox_date'].' '.$row['inbox_time']);
          if ($row['inbox_read']=='N'){ $bold = 'font-weight-bold'; }else{ $bold = ''; }
          echo "
            <a class='dropdown-item d-flex align-items-center' href='".base_url()."dashboard/detail_message/$row[id_inbox]'>
              <div class='dropdown-list-image mr-3'>
                <img class='rounded-circle' src='".base_url()."asset/img/ar.png'>
                <div class='status-indicator bg-warning'></div>
              </div>
              <div class='$bold'>
                <div class='text-truncate'>$msg...</div>
                <div class='small text-gray-500'>$row[inbox_name] - $time</div>
              </div>
            </a>";
          } ?>
        <a class="dropdown-item text-center small text-gray-500" href="<?=base_url('dashboard/inbox')?>">Read More Messages</a>
      </div>
    </li>





    <div class="topbar-divider d-none d-sm-block"></div>

    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name'); ?></span>
        <img class="img-profile rounded-circle" alt="A1" src="<?= base_url('asset/img/'.$this->session->userdata['avatar'].' ') ?>">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?=base_url('dashboard/change_author/'.$this->session->userdata['id_auth'].' ')?>">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->





<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('ar503/logout')?>">Logout</a>
      </div>
    </div>
  </div>
</div>
