
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


<?php
$db_server = "localhost";
$db_user = "isak";
$db_pass = "some_pass";
$db_name = "test_db";
$conn = "";

// koble til serveren
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// sjekk tilkobling
if (!$conn) {
    die("Connection failed: <br>" . mysqli_connect_error());
} else {
    echo "Connected to database <br>";
}

/*
// sjekker serverinfo
echo "serverinfo " . mysqli_get_server_info($conn);
*/

////////////////////////////////////////////

// henter verdien til username med POST
// henter verdien til password med POST
$username = $_POST["username"];
$password = $_POST["password"];
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(user, password) VALUES ('$username', '$hash');";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Ny bruker opprettet. <br>";
} else {
    echo "SQL ERROR" . mysqli_error($conn) . "<br>";
}

$sql = "SELECT * FROM users WHERE user = 'Frida'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row["id"] . "<br>";
    echo $row["user"] . "<br>";
}

mysqli_close($conn);


?>
