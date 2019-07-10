<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= anchor('dashboard/add_filemanager', '<i class="fas fa-plus"></i> Add File', array('class' =>'btn btn-primary btn-sm'))?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>&nbsp;</th>
            <th>File Name</th>
            <th>Path</th>
            <th>Type</th>
            <th>Size</th>
            <th>Last Update</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              foreach ($ar->result_array() as $row){
              $date = tgl_indo($row['f_date']);
              echo "<tr>
              <td align='center'>
              <a href=''><img class='img-fluid img-thumbnail' style='max-width:50px;' src='".base_url()."asset/source/$row[f_filename]'></a>
              </td>
              <td>$row[f_name]</td>
              <td>$row[f_filename]</td>
              <td>$row[f_type]</td>
              <td>$row[f_size] kb</td>
              <td>$date</td>
              <td style='width:80px;'>
              <a class='btn btn-default btn-sm' title='Detail' href='".base_url('dashboard/change_filemanager/')."$row[id_filemanager]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-default btn-sm' title='Remove' href='".base_url('dashboard/remove_filemanager/')."$row[id_filemanager]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
              </td>
              </tr>
              ";

              }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
