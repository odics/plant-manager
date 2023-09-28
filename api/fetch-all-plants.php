<?php

require_once '../classes/Plant.php';
require_once '../utils/db_connection.php';

$pdo = getDBConnection();
$plantCollection = new Plant($pdo);

$all_plants = $plantCollection->fetchAllPlants();

echo json_encode($all_plants);