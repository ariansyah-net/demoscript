<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">All Inbox</h6>
      </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $no = 1;
              foreach ($ar->result_array() as $row){
              $msg = substr($row['inbox_message'],0,40);
              $dt = tgl_indo($row['inbox_date']);
              if ($row['inbox_read']=='N'){ $bold = 'font-weight-bold'; }else{ $bold = ''; }
              echo "<tr class='$bold'>
              <td align='center' style='width:40px;'>$no</td>
              <td>$row[inbox_name]</td>
              <td>$row[inbox_subject]</td>
              <td>$msg ..</td>
              <td>$dt</td>
              <td style='width:80px;'>
              <a class='btn btn-default btn-sm' title='Detail' href='".base_url('dashboard/detail_message/')."$row[id_inbox]'> <i class='fas fa-edit'></i> </a> &nbsp;
              <a class='btn btn-default btn-sm' title='Remove' href='".base_url('dashboard/remove_message/')."$row[id_inbox]' onclick=\"return confirm('Are you sure can remove this data?')\"> <i class='fas fa-trash'></i> </a>
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
