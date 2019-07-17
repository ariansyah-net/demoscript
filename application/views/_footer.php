</div>
<div class="bg-dark p-3 mt-5 text-white">
<footer class="footer text-center">
  <? $query = $this->db->get('settings');
  foreach ($query->result_array() as $ar) {echo "$ar[site_footer]";}?>
  <span class="float-right"><a href="#"><i class="text-white fas fa-arrow-alt-circle-up fa-2x"></i></a></span>
</footer>
</div>
