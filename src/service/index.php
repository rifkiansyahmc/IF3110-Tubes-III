<?php

$id = uniqid("usr", true);

echo "$id<br/>";

$md5 = md5($id);

echo base64_encode($md5);
?>