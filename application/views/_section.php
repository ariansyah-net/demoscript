<section class="jumbotron text-center mb-0">
  <div class="container">
    <h1 class="jumbotron-heading"><i class="fab fa-linux"></i> DemoScript</h1>
    <p class="lead text-muted"> Powered by <a href="https://ariansyah.net" target="_blank">www.ariansyah.net</a> </p>
    <p>
      <div class="col-sm-12 m-3">
        <?php
					$sql = $this->db->query("SELECT * FROM category ORDER BY id_category");
					foreach ($sql->result_array() as $ar){
						echo "<a href='".base_url()."home/category/$ar[category_slug]' class='btn $ar[button] mr-2 mb-2'><i class='$ar[icon]'></i> $ar[category_name]</a>";
					}
				?>
      </div>
    </p>
  </div>
</section>
