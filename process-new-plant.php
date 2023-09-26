<?php

$plantName = $_POST['plant-name'];
$plantCultivar = $_POST['plant-cultivar'];
$datePlanted = $_POST['date-planted'];
$projectedHarvest = $_POST['projected-harvest'];
$imgURL = $_POST['plant-img'];

if(!$imgURL) {
    $imgURL = "default";
}

echo '<p>' . $plantName . '</p>';
echo '<p>' . $plantCultivar . '</p>';
echo '<p>' . $datePlanted . '</p>';
echo '<p>' . $projectedHarvest . '</p>';
echo '<p>' . $imgURL . '</p>';

