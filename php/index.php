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
        <input type="submit" name="login" value="login"> <br>
    </form>
</body>

</html>

<?php

?>