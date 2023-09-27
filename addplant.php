<?php

require_once 'components/navbar.php';
require_once 'classes/Plant.php';
require_once 'utils/db_connection.php';

$pdo = getDBConnection();
$plantCollection = new Plant($pdo);
$allPlantTypes = $plantCollection->fetchPlantTypes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Plant Manager</title>

    <meta name="description" content="Plant manager app."/>
    <meta name="author" content="Severin Odic"/>

    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/styles.css"/>

    <link rel="icon" href="images/favicon.png" sizes="192x192"/>
    <link rel="shortcut icon" href="images/favicon.png"/>
    <link rel="apple-touch-icon" href="images/favicon.png"/>

    <script defer src="js/validator.js"></script>
    <script defer src="js/add-plant-type.js"></script>

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
<body>
<?php
require_once 'components/navbar.php' ?>
<div class="form-container">
    <div class="form-card">
        <div class="form-header">
            Add New Plant
        </div>
        <div class="form-card-body">
            <form class="plant-form" id="new-plant-form" action="forms/process-new-plant.php" method="POST">
                <div class="input-group-container">
                    <div class="input-group">
                        <label for="plant-name" id="name-label">Plant type</label>
                        <div class="plant-type">
                            <select id="plant-name" name="plant-name">
                                <?php
                                foreach ($allPlantTypes as $plantType) {
                                    echo '<option value='
                                        . $plantType['id']
                                        . '>'
                                        . $plantType['plant_type']
                                        . '</option>';
                                } ?>
                            </select>
                            <button class="btn-new-plant-type" id="add-plant-type">New</button>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="plant-cultivar" id="cultivar-label">Plant cultivar</label>
                        <input type="text" id="plant-cultivar" name="plant-cultivar" placeholder="e.g. Cherry">
                    </div>
                </div>
                <div class="input-group-container">
                    <div class="input-group">
                        <label for="date-planted" id="date-planted-label">Date planted</label>
                        <input type="date" id="date-planted" name="date-planted">
                    </div>
                    <div class="input-group">
                        <label for="projected-harvest" id="proj-harvest-label">Projected harvest</label>
                        <input type="date" id="projected-harvest" name="projected-harvest">
                    </div>
                </div>
                <div class="input-group-container">
                    <div class="input-group">
                        <label for="plant-img" id="img-url-label">Image URL</label>
                        <input type="text" id="plant-img" name="plant-img"
                               placeholder="Leave blank for default picture">
                    </div>
                </div>
                <div class="button-group">
                    <button class="btn-primary" id="submit-new-plant">Submit</button>
                    <a class="btn-secondary" href="index.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'components/modal.php' ?>
</body>
</html>
