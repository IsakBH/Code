<?php
/* Skriv en funksjon som sjekker om et tall er et primtall. Et primtall er bare delelig med 1 og med seg selv. Hint: Bruk modulusoperatoren (% ) for å sjekke om et tall er delelig med et annet. */

function Primtall($tall1){
    if ($tall1 == 1)
    return 0;
    for ($i = 2; $i <= $tall1/2; $i++){
        if ($tall1 % $i == 0){
            echo "Tallet er ikke et primtall.";
        }
        else {
            echo "Tallet er et primtall.";
        }
    }
}


Primtall(tall1: 17);
?>
