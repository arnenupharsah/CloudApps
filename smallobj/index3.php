<?php 
$url_to_image = 'http://localhost/cloudapps/smallobj/img/ship.jpg';
$my_save_dir = 'img/';
$filename = basename($url_to_image);
$complete_save_loc = $my_save_dir . $filename;
file_put_contents($complete_save_loc, file_get_contents($url_to_image));
?>