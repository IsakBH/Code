<!DOCTYPE html>
<html lang="no">

<head>
    <title> kul php </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="styling.css">
</head>

<body>
    <h2>Kul PHP</h2>
    <form action="index.php" method="post">
        <label>Skriv inn passord:</label> <br>
        <input type="password" id="input" name="password" value="password"> <br>
        <input type="submit" id="skibidi" name="submit1" value="submit"> <br>
    </form> <br>
    <form action="index.php" method="post">
        <label>Hvilken informasjon vil du ha?</label> <br>
        <input type="checkbox" id="input" name="httpinfos[]" value="HTTP_HOST"> HTTP_HOST <br>
        <input type="checkbox" id="input" name="httpinfos[]" value="HTTP_REFERER"> HTTP_REFERER <br>
        <input type="checkbox" id="input" name="httpinfos[]" value="HTTP_USER_AGENT"> HTTP_USER_AGENT <br>
        <input type="submit" id="skibidi" name="submit2" value="submit"> <br>
    </form>
</body>

</html>

<?php
$password = null; // Lager en variabel med verdi null.
$httpinfos = $_POST["httpinfos"];

if (isset($_POST["submit1"])) { // Sjekker om "submit" knappen i et HTML-form er set, eller, trykket på.
    $password = $_POST["password"]; // Setter verdien til $password variabelen til samme verdien som "password" inputten fra HTML-formet
    $encrypted = password_hash($password, PASSWORD_DEFAULT, ["cost" => 10]); // Lag en variabel med password_hash, som encrypter $password variabelen med PASSWORD_DEFAULT encryption, som akkurat nå er bcrypt. "cost" vil si hvor mye CPU den får lov til å bruke, eller, hvor mye det "koster" av CPU-en å encrypte passordet.
    echo "Encrypted password: $encrypted <br>"; // printer ut det krypterte passordet i en string.
}

if (password_verify($password, $encrypted)) { // Sjekker om password_verify kan verifisere at $password og $encrypted er make. Den decrypter $encrypted og matcher resultatet med $password.
    echo "Password is valid. <br>";
}

if (isset($_POST["submit2"])) {
    $httpinfos = $_POST["httpinfos"];

    foreach ($httpinfos as $httpinfo) {
        echo "$httpinfo <br>";
    }
}

/*if (isset($_POST["submit2"])) {
    switch ($httpinfo) {
        case "HTTP_HOST";
            echo $_SERVER["HTTP_HOST"];
            break;

        case "HTTP_REFERER";
            echo $_SERVER["HTTP_REFERER"];
            break;
        case "HTTP_USER_AGENT";
            echo $_SERVER["HTTP_USER_AGENT"];
            break;
        default:
            echo "Velg informasjonen du vil ha";
    }
}
*/
?>