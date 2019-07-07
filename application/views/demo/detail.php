<title><?= $title ?></title>
<?php
	foreach ($ar->result_array() as $row){
    echo "$row[content_code]";
  }
?>
