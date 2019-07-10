<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= anchor('dashboard/add_demoscript', '<i class="fas fa-edit"></i> Add New', array('class' =>'btn btn-success btn-sm'))?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Hits</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              foreach ($ar->result_array() as $row){
              $date = tgl_indo($row['content_date']);

              echo "<tr>
              <td align='center'>$no</td>
              <td>$row[content_title]</td>
              <td>$row[category_name]</td>
              <td>$date</td>
              <td>$row[content_hits] View</td>
              <td style='width:80px;'>
              <a class='btn btn-default btn-sm' title='Detail' href='".base_url('dashboard/edit_demoscript/')."$row[id_content]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-default btn-sm' title='Remove' href='".base_url('dashboard/remove_demoscript/')."$row[id_content]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
              </td>
              </tr>
              ";
              $no++;
              }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<button class="btn btn-primary" onclick="sweet()">Switch Alert</button>

<script>
function sweet (){

// swal("Auah Gelap", "Ngantuk pala gua dengerin orang berantem!", "info");

swal("Perut ane perih belom madang", {
  icon: "warning",
  title: "SABAR YA GAN",
  button: {
    text: "Ane Ngopi Dulu",
  },
});

}
</script>
