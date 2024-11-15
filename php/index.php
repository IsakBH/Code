<!doctype html>
<html lang="no">

<head>
    <title> Isak B. Henriksen </title>
    <link rel="icon" href="../Pictures/Tux.svg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>
<form action="index.php" method="post">
<input type="text" name="tall" placeholder="Velg et tall fra 1-10">
<input type="submit" name="submit" value="Spill">
</form>
</body>


<?php
$muligheter = array("0", "1", "2"); // lager en array med verdiene 0, 1, og 2
$maskinensValg = array_rand($muligheter); // lager en variabel og angir en tilfeldig verdi fra arrayen $muligheter
$dittValg = $_POST["dittValg"]; //

if ($dittValg == $maskinensValg) { // hvisdittValg er det samme som maskinensValg
    echo "Uavgjort <br>"; // Uavgjort
}
elseif ($dittValg == "0" && $maskinensValg == "1" ||$dittValg == "2" && $maskinensValg == "0" || $dittValg == "1" && $maskinensValg == "2") { // sjekker alle mulighetene for at du vinner
    echo "Du vant! <br>"; // Du vant
}
else { // Hvis det ikke er uavgjort, og du ikke vant, så har du tapt.
    echo "Du tapte... <br>"; // Du tapte
}

echo "<br> Du valgte: $dittValg <br> Maskinen valgte: $maskinensValg <br>"; // Printer ut dittValg og maskinensValg
?>
