<div class="jumbotron pt-5">
<div class="container">
<div class="table-responsive-sm">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th>File Name</th>
        <th>Type</th>
        <th>Push</th>
        <th class="text-center">Counter</th>
        <th class="text-center">Download</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $no = 1;
          foreach ($ar->result_array() as $row){
          $date = tgl_indo($row['down_date']);
          echo "<tr>
          <td align='center'>$no</td>
          <td>$row[down_title]</td>
          <td>$row[down_typefile]</td>
          <td>$date</td>
          <td align='center'><a class='btn btn-outline-default btn-sm btn-block'>$row[down_hits]</a></td>
          <td style='width:80px;'>
          <a class='btn btn-outline-default btn-sm btn-block text-primary' title='download' href='".base_url('download/files/')."$row[down_filename]'> <i class='fas fa-download'></i> </a>
          </td>
          </tr>
          ";
          $no++;
          }
        ?>
    </tbody>
  </table>
</div>

</div></div>
