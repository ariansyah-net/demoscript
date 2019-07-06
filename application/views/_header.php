<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <? $query = $this->db->get('settings');
          foreach ($query->result_array() as $ar) {
            echo "$ar[site_left_menu]";
            echo "
                </div>
              <div class='col-sm-4 offset-md-1 py-4'>
              $ar[site_right_menu]
            </div>
          </div>
        </div>
      </div>
    ";
  }
?>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">
        <? $query = $this->db->get('settings');
        foreach ($query->result_array() as $ar) {
          echo "<i class='$ar[site_icon]'></i>&nbsp; <strong>$ar[site_name]</strong> ";
        }
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </div>
</header>
