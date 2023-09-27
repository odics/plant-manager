<?php
require_once '../classes/Plant.php';
require_once '../utils/db_connection.php';

$pdo = getDBConnection();
$plantTypes = new Plant($pdo);

$plant_type = $_POST['plant-type'];
$plantTypes->addPlantType($plant_type);

header('Location: ../addplant.php');