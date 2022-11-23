<?php

require_once __DIR__ . '/../constants.php';
require_once __DIR__ . '/../variables.php';
require_once __DIR__ . '/../getPlayers.php';

$a = getPlayers();

var_dump($a);