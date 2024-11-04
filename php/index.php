<!DOCTYPE html>
<html lang="no">

<head>
    <title> kul php </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="styling.css">
</head>

<body>
    <h2>Skikkelig tøff PHP</h2>
    <form action="index.php" method="post">
        <label>Brukernavn:</label> <br>
        <input type="text" name="username" placeholder="ihe017"> <br>
        <label>Alder:</label> <br>
        <input type="text" name="age" placeholder="16"> <br>
        <label>E-post:</label> <br>
        <input type="text" name="email" placeholder="isak@brunhenriksen.net"> <br>
        <label>Passord:</label> <br>
        <input type="password" name="password" placeholder="Passord"> <br>
        <label>Skriv inn et tilfeldig tall: </label> <br>
        <input type="text" name="number" placeholder="3"> <br>
        <input type="submit" name="submit" value="submit"> <br>
    </form>
</body>

</html>

<?php
$username = $_POST["username"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST["password"];
$number = $_POST["number"];
$sum = $age + $number;

if (isset($_POST["submit"])) {
    if (empty($username)) {
        echo "Brukernavn er ikke fylt inn";
    } elseif (empty($password)) {
        echo "Passord er ikke fylt inn.";
    } elseif (empty($email)) {
        echo "E-post er ikke fylt inn.";
    } elseif (empty($age)) {
        echo "Alder er ikke fylt inn.";
    } elseif (empty($number)) {
        echo "Det tilfeldige tallet er ikke fylt inn.";
    } else {
        echo "Brukernavn = $username <br>";
        echo "Password = $password <br>";
        echo "Alder = $age <br>";
        echo "E-post = $email <br>";
        echo "Alder ($age) + tilfeldig tall ($number) = $sum ";
    }
}
?>