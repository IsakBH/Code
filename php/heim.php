<?php
session_start();
?>

<!DOCTYPE html>
<html lang="no">

<head>
    <title> kul php </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">


</head>

<body>

    <h2>Skikkelig tøff PHP</h2>
    <p>ditta her e ein heimeseia</p>
    <form action="heim.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>

</html>

<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}

?>