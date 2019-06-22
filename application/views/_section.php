<section class="jumbotron text-center mb-0">
  <div class="container">
    <h1 class="jumbotron-heading"><i class="fab fa-dochub"></i> DemoScript</h1>
    <p class="lead text-muted">Adalah halaman yang berisi contoh program, suatu fungsi, maupun studi kasus. materi atau penjelasan dalam web ini dibahas pada halaman <a href="https://ariansyah.net" target="_blank">www.ariansyah.net</a>, semoga halaman ini dapat membantu anda. </p>
    <p>
      <div class="col-sm-12 m-3">
        <?php
					$sql = $this->db->query("SELECT * FROM category ORDER BY id_category");
					foreach ($sql->result_array() as $ar){
						echo "<a href='".base_url()."home/category/$ar[category_slug]' class='btn $ar[button]'><i class='$ar[icon]'></i> $ar[category_name]</a>";
            echo "&nbsp;&nbsp;";
					}
				?>
      </div>
    </p>
  </div>
</section>
