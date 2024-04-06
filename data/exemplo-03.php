<?php

$date = new DateTime();
echo $date->format('Y-m-d H:i:s');


$date = new DateTime('2022-12-31');
$date->modify('+1 day');
echo $date->format('Y-m-d');


?>
