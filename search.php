<?php
require_once 'components/navbar.php';
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
<div class="search-container">
    <div class="search-input">
        <select>
            <option value="name">Plant type</option>
            <option value="name">Plant cultivar</option>
        </select>
        <input type="text" placeholder="Start typing to search...">
    </div>
</div>
</body>
</html>
