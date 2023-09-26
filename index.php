<?php

require_once 'classes/Plant.php';
require_once 'utils/db_connection.php';

$pdo = getDBConnection();
$plants = new Plant($pdo);

echo '<pre>';
print_r($plants->fetchAllPlants());
echo '</pre>';

echo '<pre>';
print_r($plants->fetchNotesByPlantID(1));
echo '</pre>';