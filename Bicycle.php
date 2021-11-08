<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);