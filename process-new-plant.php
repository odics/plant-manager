<?php
require_once 'classes/Plant.php';
require_once 'utils/db_connection.php';

$pdo = getDBConnection();
$plant = new Plant($pdo);


$plantName = $_POST['plant-name'];
$plantCultivar = $_POST['plant-cultivar'];
$datePlanted = $_POST['date-planted'];
$projectedHarvest = $_POST['projected-harvest'];
$imgURL = $_POST['plant-img'];

if(!$imgURL) {
    $imgURL = "https://cdn-icons-png.flaticon.com/512/628/628283.png";
}

$plant->addNewPlant($plantName, $plantCultivar, $datePlanted, $projectedHarvest, $imgURL);

header('Location: index.php');
