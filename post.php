<?php
$data = array('massage' => '', 'name' => 'SadiAboWarda');
$data['massage'] =$_POST['massage'] ;
$JSON_FORMAT = json_encode($data);
echo $JSON_FORMAT;
?>