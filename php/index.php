<!DOCTYPE html>
<html lang="no">
<head>
  <title> kul php </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">'
  <link rel="stylesheet" href="styling.css">
</head>
<body>
<h2>kul php ting</h2>
<form action="index.php" method="post">
    <label>username: </label>
    <input type="text" name="username"> <br>
    <label>password: </label>
    <input type="password" name="password"> <br>
    <input type="submit" name="login" value="Log in"> <br>
</form>
</body>
</html>

<?php foreach ($_POST as $key => $value) {
    echo "$key = $value <br>";
}

/*if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is not filled in";
    } elseif (empty($password)) {
        echo "Password is not filled in";
    } else {
        echo "Welcome $username";
    }
}
*/

?>
