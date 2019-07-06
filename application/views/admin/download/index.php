<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= anchor('dashboard/add_download', '<i class="fas fa-edit"></i> Add New', array('class' =>'btn btn-primary btn-sm'))?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>File Name</th>
            <th>Type</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              foreach ($ar->result_array() as $row){
              echo "<tr>
              <td align='center' style='width:40px;'>$no</td>
              <td>$row[down_title]</td>
              <td>$row[down_filename]</td>
              <td>$row[down_typefile]</td>
              <td style='width:80px;'>
              <a class='btn btn-default btn-sm' title='Detail' href='".base_url('dashboard/change_download/')."$row[id_download]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-default btn-sm' title='Remove' href='".base_url('dashboard/remove_download/')."$row[id_download]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
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
