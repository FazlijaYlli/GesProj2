<?php

include_once 'Database.php';

$test = new Database();

$result = $test->queryConsumables(1);

var_dump($result);
?>