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
include("../Include/HTML/navbar.html");
?>

<body>
    <div class="content">
        <div class="sidebar">
            <a href="#6.12.24">6.12.24</a>
            <a href="#2.12.24">2.12.24</a>
            <a href="#28.11.24">28.11.24</a>
            <a href="#27.11.24">27.11.24</a>
            <a href="#15.11.24">15.11.24</a>
            <a href="#dokumentasjon">Dokumentasjon</a>
        </div>
        <div id="logg">
            <h2 id="6.12.24">Fredag 6.12.24 (dobbeltime) </h2>
            <?php
            include("../Logg/Text/logg-06.12.24.txt");
            ?>
            <br> <hr> <br>

            <h2 id?="2.12.24">Mandag 2.12.24 (dobbeltime) </h2>
            <?php
            include("../Logg/Text/logg-02.12.24.txt");
            ?>
            <br> <hr> <br>

            <h2 id="28.11.24">Torsdag 28.11.24 (dobbeltime)</h2>
            <?php
            include("../Logg/Text/logg-28.11.24.txt");
            ?>
            <br> <hr> <br>

            <h2 id="27.11.24">Onsdag 27.11.24 (dobbeltime)</h2>
            <?php
            include("../Logg/Text/logg-27.11.24.txt");
            ?>
            <br> <hr> <br>

            <h2 id="15.11.24">Fredag 15.11.24 (dobbeltime)</h2>
            <?php
            include("../Logg/Text/logg-15.11.24.txt");
            ?>
            <br> <hr> <br>

            <h1 id="dokumentasjon">Dokumentasjon</h1>
            <?php
            include("../Logg/Text/dokumentasjon.txt");
            ?>
        </div>
    </div>
</body>
