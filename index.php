<?php
require_once 'components/navbar.php';
require_once 'components/card.php';
require_once 'classes/Plant.php';
require_once 'utils/db_connection.php';

$pdo = getDBConnection();
$plantCollection = new Plant($pdo);
$allPlants = $plantCollection->fetchAllPlants();

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Plant Manager</title>

    <meta name="description" content="Plant manager app." />
    <meta name="author" content="Severin Odic" />

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <link rel="icon" href="images/favicon.png" sizes="192x192" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />

    <script defer src="js/index.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap"
          />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
          />
  </head>
  <body>'
    . renderNavBar() .
    '<div class="container">';
    foreach ($allPlants as $plant) {
        echo renderPlantCard(
            $plant['plant_name'],
            $plant['cultivar'],
            $plant['date_planted'],
            $plant['projected_harvest'],
            $plant['img_src']);
    }
    echo '</div>
  </body>
</html>';
