<?php


$newformat =  DateTime::createFromFormat('d-m-Y', '9-10-2003')->format('Y-m-d');

echo $newformat;
?>