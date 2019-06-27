<?php
$perPage = 9;
$cat = $this->input->get('category');
if (isset($cat)) {
  $page = $this->uri->segment(3);
}else{
  $page = $this->uri->segment(2);
}
?>

<main role="main">

<?php if ($ar): ?>
<div class="album bg-light">
<div class="container">

<div class="row">
<?php foreach ($ar as $hh): ?>

<div class="card m-2" style="width: 22rem;">
<a target="_blank" href="<?=base_url('home/detail')?>/<?= $hh->content_slug ?>">

  <?php if (!empty($hh->content_img)): ?>
    <img src="<?= site_url("asset/post/$hh->content_img") ?>" class="card-img-top">
  <?php else: ?> <img src="<?= site_url("asset/post/noimage.png") ?>" class="card-img-top">
  			<?php endif ?>
  		    </a>

<div class="card-body">
<h5 class="card-title"><a target="_blank" href="<?=base_url('home/detail')?>/<?= $hh->content_slug ?>"><?= $hh->content_title ?></a></h5>
<p class="card-text"><?= $hh->content_desc ?></p>
<div class="d-flex justify-content-between align-items-center">
<div class="btn-group">
<?= anchor("home/category/$hh->category_slug", '<i class="fas fa-thumbtack"></i> '.$hh->category_name.' ', ['class' => 'btn btn-sm btn-outline-danger']) ?>
<button class="btn btn-sm btn-outline-danger"><i class="far fa-thumbs-up"></i> <?= $hh->content_hits ?> View</button>
</div>
<small class="text-muted"><?=$date = tanggal($hh->content_date); ?></small>
</div>
</div>
</div>

<?php endforeach ?>
</div>
</div>

<div class="py-4">
	<?php if ($pagination): ?>
		<?= $pagination ?>
  </div>
	<?php else: ?>&nbsp;<?php endif ?>

<?php else: ?>

<div class="jumbotron text-center danger"><i class="fas fa-exclamation-circle"></i> Sorry, content is under repair.</div>

  </div>
</main>

<?php endif ?>
