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
        <input type="submit" id="skibidi" name="submit" value="confirm"> <br>
    </form>
</body>

</html>

<?php
$password = null;

if (isset($_POST["submit"])) {
    $password = $_POST["password"];
    $encrypted = password_hash($password, PASSWORD_DEFAULT, ["cost" => 10]);
    echo "Encrypted password: $encrypted <br>";
}

if (password_verify($password, $encrypted)) {
    echo "Password is valid. <br>";
} else {
    echo "Password is invalid. You shall not pass! <br>";
}

?>