<!DOCTYPE html>
<html lang="no">
<head>
  <title> kul php </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="styling.css">
</head>
<body>
<h2>Kul PHP</h2>
</body>
</html>

<?php
function is_even($number)
{
    // Lager en funksjon som heter "is_even" med parameteret "$number". Parameteret er noe du må skrive inn i parantesen når du caller på funksjonen, og oppfører seg som en midlertidig variabel som bare eksisterer inni funksjonen.
    return $number % 2; // Returnerer variabelen "$number" med modulus 2.
}

echo is_even(11);

// printer resultatet av "is_even" funksjonen med "$number" parameteret som 11.


?>
