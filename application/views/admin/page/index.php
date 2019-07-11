<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= anchor('dashboard/add_page', '<i class="fas fa-edit"></i> Add New', array('class' =>'btn btn-primary btn-sm'))?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Title</th>
            <th class="text-center">Content</th>
            <th class="text-center">Status</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              foreach ($ar->result_array() as $row){
              echo "<tr>
              <td align='center' style='width:40px;'>$no</td>
              <td>$row[page_title]</td>
              <td>$row[page_content]</td>
              <td style='width:105px'>";
              if ($row['page_active']=='Y'){
                $ar = '<button type="button" class="btn btn-default btn-sm text-secondary"><i class="fas fa-check-circle"></i> Active </button>';
              }else{
                $ar = '<button type="button" class="btn btn-default btn-sm text-danger"><i class="fas fa-exclamation-circle"></i> Non Active </button>';
              }
              echo "$ar </td>";
              echo "
              <td style='width:80px;'>
              <a class='btn btn-default btn-sm' title='Detail' href='".base_url('dashboard/change_page/')."$row[id_page]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-default btn-sm' title='Remove' href='".base_url('dashboard/remove_page/')."$row[id_page]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
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
