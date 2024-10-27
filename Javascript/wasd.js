function updateClock() {
    var today = new Date();
    var h = String(today.getHours()).padStart(2, '0'); // "getHours" er ganske selvexplanatory...
    var m = String(today.getMinutes() + 1).padStart(2, '0'); // det er "getMinutes" også...
    var s = today.getSeconds(); // samme med "getSeconds"...

    today = h + '/' + m + '/' + s;
    document.write(today);

    setTimeout(updateClock, 1000); // Oppdater hvert sekund

}

// Start klokkelokken
updateClock();