<?php

require_once 'classes/Plant.php';
require_once 'utils/db_connection.php';
global $pdo;

$plants = new Plant($pdo);

echo '<pre>';
print_r($plants->fetchAllPlants());
echo '</pre>';