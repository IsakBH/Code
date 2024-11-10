<?php
include("database.php");

$sql = "SELECT * FROM users WHERE user = 'Frida'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row["id"] . "<br>";
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="no">

<head>
    <title> kul php </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>
    <form action="database.php" method="post">
        <label>
            Brukernavn:
        </label> <br>
            <input type="text" name="username"> <br>
        <label>
            Passord:
        </label> <br>
            <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="Logg på">
    </form>
</body>

</html>
