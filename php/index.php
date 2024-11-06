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

</body>

</html>
<?php
$password = "pizza123";
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hash)) {
    echo "Password is correct";
} else {
    echo "Password is incorrect";
}
?>