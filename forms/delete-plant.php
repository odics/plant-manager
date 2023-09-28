<?php
require_once '../classes/Plant.php';
require_once '../utils/db_connection.php';

$pdo = getDBConnection();
$plant = new Plant($pdo);

$id = $_POST['plantID'];
$plant->deletePlant($id);
header('Location: ../index.php');
