<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= anchor('dashboard/add_category', '<i class="fas fa-edit"></i> Add New', array('class' =>'btn btn-primary btn-sm'))?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Category Name</th>
            <th>Button Class</th>
            <th>Icons</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              foreach ($ar->result_array() as $row){
              echo "<tr>
              <td align='center' style='width:40px;'>$no</td>
              <td>$row[category_name]</td>
              <td><a href='#' class='btn $row[button] btn-sm'>$row[button]</a></td>
              <td><i class='$row[icon]'></i> $row[icon]</td>

              <td style='width:80px;'>
              <a class='btn btn-info btn-sm' href='".base_url('dashboard/edit_category/')."$row[id_category]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-danger btn-sm' href='".base_url('dashboard/remove_category/')."$row[id_category]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
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
