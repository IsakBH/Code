<!doctype html>
<html lang="no">

<head>
    <title> Isak B. Henriksen </title>
    <link rel="icon" href="../Pictures/Tux.svg.png">
    <link rel="stylesheet" href="../Stylesheets/dokumentasjon.css">
    <script src="../Javascript/toggle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<?php
include("../Include/navbar.html");
?>

<body>
    <div class="content">
        <div class="sidebar">
            <!--<a href="#20.11.24">20.11.24</a>-->
            <a href="#15.11.24">15.11.24</a>
            <a href="#dokumentasjon">Dokumentasjon</a>
        </div>
        <div id="logg">
            <h2 id="15.11.24">15.11.24 (dobbeltime)</h2>
            <?php
            include("../Logg/Text/logg-15.11.24.txt");
            ?>
            <br>

            <hr>

            <br>

            <h1 id="dokumentasjon">Dokumentasjon</h1>
            <?php
            include("../Logg/Text/dokumentasjon.txt");
            ?>
        </div>
    </div>
</body>
