<?php



function getDBConnection(): PDO
{
    $host = 'db';
    $db = 'plant_manager';
    $user = 'root';
    $password = 'password';

    $dsn = "mysql:host=$host;dbname=$db;";

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        return new PDO($dsn, $user, $password, $options);
    } catch (PDOException $exception) {
        echo '<p>There was an error connecting to the DB</p>';
        exit();
    }
}

