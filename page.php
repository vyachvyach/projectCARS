<?php
  $dir_small = 'gallery_img/small/';
  $dir_big = 'gallery_img/big/';
  $images = scandir($dir_small);
    for($i = 0; $i < count($images); $i++) {
      if ($images[$i] != '.' && $images[$i] != '..') {
        echo '<a rel="gallery" target=_blank class="photo" href="'.$dir_big.$images[$i].'"><img src="'.$dir_small.$images[$i].'" width="150" height="100" /></a>';
    }
  }
?>
