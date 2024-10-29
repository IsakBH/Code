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
    <input type="checkbox" name="pizza" value="pizza">
        Pizza <br>
    <input type="checkbox" name="pasta" value="pasta">
        Pasta <br>
    <input type="checkbox" name="hotdog" value="hotdog">
        Hotdog <br>
    <input type="submit" name="confirm" value="confirm">
</form>
</body>
</html>

<?php if (isset($_POST["submit"])) {
    if (isset($_POST["pizza"])) {
        echo "You like pizza!";
    } elseif (isset($_POST["pasta"])) {
        echo "You like pasta!";
    } elseif (isset($_POST["hotdog"])) {
        echo "You like hotdogs!";
    }
}
?>
