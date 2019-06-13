<main role="main">

<div class="album bg-light">
<div class="container">

<div class="row">

  <?php
             foreach ($ar->result_array() as $dd){
               $date = tanggal($dd['content_date']);
               $content =(strip_tags($dd['content_main']));
               echo "<div class='card' style='width: 22rem; margin: 10px;''>";
                 if ($dd['content_img'] == ''){
                   echo "<a target='_blank' href='".base_url()."$dd[category_slug]/$dd[content_slug]'>
                   <img src='".base_url()."asset/post/noimage.png' class='card-img-top' alt='$dd[category_name]' >
                   </a>
                   ";
                 }else{
                   echo "<a target='_blank' href='".base_url()."$dd[category_slug]/$dd[content_slug]'>
                   <img src='".base_url()."asset/post/$dd[content_img]' class='card-img-top' alt='$dd[category_name]'>
                   </a>";
                 }
                 echo "
                  <div class='card-body'>
                   <h5 class='card-title'><a target='_blank' href='".base_url()."$dd[category_slug]/$dd[content_slug]'>$dd[content_title]</a></h5>
                   <p class='card-text'>$dd[content_main]</p>
                   <div class='d-flex justify-content-between align-items-center'>
                   <div class='btn-group'>
                   <a href='$dd[content_link]' class='btn btn-sm btn-outline-danger'><i class='fas fa-thumbtack'></i> $dd[category_name]</a>
                   <button class='btn btn-sm btn-outline-danger'><i class='far fa-thumbs-up'></i> $dd[content_hits] View</button>
                   </div>
                   <small class='text-muted'>$date</small>
                   </div>
                   </div>
                   </div>
                   ";
             }
           ?>
      </div></div>
      <p>
      <?php echo $this->pagination->create_links(); ?>
      </div>
      </main>
