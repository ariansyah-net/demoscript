<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= anchor('dashboard/add_author', '<i class="fas fa-edit"></i> Add New', array('class' =>'btn btn-primary btn-sm'))?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Username</th>
            <th>Privilege</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

          <?php
              $no = 1;
              foreach ($ar->result_array() as $row){
              echo "<tr>
              <td align='center' style='width:40px;'>$no</td>
              <td>$row[name]</td>
              <td>$row[username]</td>
              <td>";
              if ($row['level']=='root'){
                $aa = '<button type="button" class="btn btn-default btn-sm text-secondary"><i class="fas fa-user-ninja"></i> Super User';
              }else {
                $aa = '<button type="button" class="btn btn-default btn-sm text-info"><i class="fas fa-user-tie"></i> Administrator';
              }
              echo "$aa </td>";
              echo "
              <td>";
              if ($row['active']=='Y'){
                $ar = '<button type="button" class="btn btn-default btn-sm text-secondary"><i class="fas fa-check-circle"></i> Active </button>';
              }else{
                $ar = '<button type="button" class="btn btn-default btn-sm text-danger"><i class="fas fa-exclamation-circle"></i> Non Active </button>';
              }
              echo "$ar </td>";
              echo "
              <td style='width:80px;'>
              <a class='btn btn-default btn-sm' title='Detail' href='".base_url('dashboard/change_author/')."$row[id_auth]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-default btn-sm' title='Remove' href='".base_url('dashboard/remove_author/')."$row[id_auth]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
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
