<?php
$data = array('massage' => "Hello". "  " .$_GET['name']);
$JSON_FORMAT = json_encode($data);
echo  $JSON_FORMAT;
?>