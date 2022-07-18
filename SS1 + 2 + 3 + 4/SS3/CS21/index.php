<?php
$a = 5985;
var_dump(is_numeric($a));
$b = "5985";
var_dump(is_numeric($b));
$c = "59.85" + 100;
var_dump(is_numeric($c));
$d = "Hello";
var_dump(is_numeric($d));
?>