<?php
$data=array("name"=>"krishna","age"=>"23");
$json=json_encode($data);
$arr=json_decode($json);
print_r($arr);

?>