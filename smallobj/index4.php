<?php
$data = file_get_contents('http://localhost/cloudapps/smallobj/img/ship.jpg');
header('Content-Type: "'.$mime.'"');
header('Content-Disposition: attachment; filename="'.$filename.'"');
header("Content-Transfer-Encoding: binary");
header('Expires: 0');
header('Pragma: no-cache');
header("Content-Length: ".strlen($data));
exit($data);

?>