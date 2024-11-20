<!doctype html>
<html lang="no">

<head>
    <title> Isak B. Henriksen </title>
    <link rel="icon" href="../Pictures/Tux.svg.png">
    <link rel="stylesheet" href="../Stylesheets/styling2.css">
    <script src="../Javascript/toggle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>

    <!--- Navigasjonsbar -->
    <?php
    include("Include/HTML/navbar.html");
    ?>

    <h1> Isak B. Henriksen </h1>

<?php
include("Logg/Text/ommeg.txt");
?>

    <div class="side2knapp">
        <button onclick="location.href = '/Undersider/side2.php';" id="myButton"
            class="float-left submit-button">Leke side</button>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
