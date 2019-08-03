<?php
$perPage = 10;
$keywords = $this->input->get('keywords');
if (isset($keywords)) {
	$page = $this->uri->segment(3);
}else{
	$page = $this->uri->segment(2);
}
$i = isset($page) ? $page * $perPage - $perPage : 0;
?>
<?php if($ar): ?>

<div class="mt-5">
<div class="container primary">
<div class="table-responsive-sm">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th>File Name</th>
        <th class="text-center">Type</th>
        <th class="text-center"><i class="fas fa-calendar-check"></i> Push</th>
        <th class="text-center"><i class="fas fa-users"></i></th>
        <th class="text-center">Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ar as $r): ?>
        <?= ($i & 1) ? '<tr>' : '<tr>'; ?>
        <td align="center"><?= ++$i ?></td>
        <td><?= $r->down_title ?></td>
			  <td class="text-center"><?= $r->down_typefile ?></td>
				<td><?=$date = tanggal($r->down_date); ?></td>
				<td class="text-center"><a class="btn btn-outline-default btn-sm"><?= $r->down_hits ?></a></td>
				<td class="text-center"><a class="btn btn-success btn-sm" title="Click to download" href="<?= base_url('download/files/'.$r->down_filename) ?>"> &nbsp;&nbsp;&nbsp;<i class='fas fa-download'>&nbsp;&nbsp;</i></a></td>
<?php endforeach ?>
</tbody>
</table>
<strong> Total Entry : <?= isset($jumlah) ? $jumlah : '' ?></strong>



<?php if ($pagination): ?>
<?= $pagination ?>

<?php else: ?>&nbsp;<?php endif ?>
<?php else: ?>
<div class="jumbotron text-center text-danger"><i class="fas fa-exclamation-circle"></i> Sorry, no file available yet to download.</div>
</div>
<?php endif ?>
</div>
</div>
