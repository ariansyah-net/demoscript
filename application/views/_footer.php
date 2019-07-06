<footer class="text-muted" style="padding-top:15px">
  <div class="container">
    <p class="float-right"><a href="#"><i class="fas fa-arrow-alt-circle-up fa-2x"></i></a></p>
    <? $query = $this->db->get('settings');
    foreach ($query->result_array() as $ar) {
      echo "<p class='text-center'>$ar[site_footer]</p>";
    }
    ?>
  </div>
</footer>
