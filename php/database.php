<?php
$db_server = "localhost";
$db_user = "isak";
$db_pass = "some_pass";
$db_name = "test";
$conn = "";

try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch (mysqli_sql_exception) {
    echo "Could not connect to database. <br>";
}

if ($conn) {
    echo "You're connected to the database. <br>";
}
