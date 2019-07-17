<div class="container mt-5 mb-5 pb-5">
  <?php
  	foreach ($ar->result_array() as $row){
      $date = tgl_indo($row['page_date']);
      echo "$row[page_content]";
      echo "<nav aria-label='breadcrumb'>
      <ol class='breadcrumb mt-5'>
          <li class='breadcrumb-item active' aria-current='page'>
            <i class='fas fa-calendar-alt'></i> $date
          </li>
          <li class='breadcrumb-item active' aria-current='page'>
          <i class='fas fa-user-alt'></i> Administrator
          </li>
          <li class='breadcrumb-item active' aria-current='page'>
          <i class='fas fa-eye'></i> $row[page_hits] View
          </li>
        </ol>
       ";
    }
  ?>
</div>
