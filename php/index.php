<?php
include("database.php");

$username = "apekatt123";
$password = "linustorvalds";

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

try {
    mysqli_query($conn, $sql);
    echo "User is now registered.";
} catch (mysqli_sql_exception) {
    echo "Could not register user.";
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

</body>

</html>