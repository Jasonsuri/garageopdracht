<?php
session_start();

$_SESSION["gebruikersnaam"] = '';
$_SESSION['admin'] = '';

unset($_SESSION["gebruikersnaam"]);
unset($_SESSION["admin"]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
</head>
<body>
<main>
    <h1>
        <?php
        print "Je bent uitgelogd" . "<br/>";
        print "<a href='../html/index.html'>klik hier om in te loggen.</a>"
        ?>
    </h1>
</main>
</body>
</html>