<!doctype html>
<html lang="no">

<head>
    <title> Isak B. Henriksen </title>
    <link rel="icon" href="Pictures/isaknyklipp.png">
    <link rel="stylesheet" href="Stylesheets/styling.css">
    <script src="Javascript/toggle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>
    <?php
    include("Include/navbar.html");
    ?>

    <div class="øverst">
        <div>
            <h1> Bytt til linux NÅ </h1>
            <span class="advarsel"> Denne siden er bare for lek, ikke forvent noe bra.</span>
        </div>
    </div>

    <div id="about">
        <div id="description">
            <p>
                Du har ikke et valg, håper du vet det. Hvis du bruker macOS, så tenker jeg du går ut av mitt nærområde
                <b>umiddelbart</b>. Til og med Windows er bedre enn macOS. Hørt om DirectX? Nei! Nå bruker du Vulkan. Hørt om
                MSPaint? Nei! Nå bruker du GIMP!
                Som jeg sa isted, så har du ingen valg. Du SKAL bytte til et ordentlig operativsystem NÅ.
            </p>
        </div>
        <div id="descriptionbilde">
            <img id="millie-bilde" src="https://wallpapercave.com/wp/YpCO1pN.jpg">
        </div>
    </div>

    <button onclick="location.href = 'Undersider/side2.php';" id="myButton" class="float-left submit-button">Neste
        side</button>
    <button onclick="location.href = 'https://www.amalieskram.vgs.no/';" id="myButton"
        class="float-left submit-button">ASVG</button>
    </div>

    <hr>

    <div class="etterøverst">

        <h3> Hei! Jeg heter Isak. </h3>
        <p> Jeg går på Vg1 Informasjonsteknologi og Medieproduksjon på Amalieskram VGS. <br> Jeg lager denne nettsiden for å
            teste mine egne ferdigheter, og samtidig for bruk til visse søknader eller en CV.</p>


        <div id="videoembeds">
            <div id="hotline">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AtLctpjgTqQ?si=CWfkaCYg7t_3gDpZ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <p> Musikken jeg hører på er elektro/edm, litt pop, litt country, og litt av alt annet untatt metall. </p>
    </div>

    <hr>

    <button onclick="location.href= 'Undersider/Skoleprosjekter/index.php'">Skole prosjekter</button>

    <!--- Ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>