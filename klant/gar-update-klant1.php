<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>gar-zoek-klant1.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage update klant 1</h1>
<p>Dit formulier wordt gebruikt om klantgegevens te wijzigen.</p>
<form action="gar-update-klant2.php" method="post">
    Welke klant wilt u wijzigen?
    <input type="text" name="klantidvak" <br/>
    <input type="submit">
</form>
</body>

</html>

<?php

/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 10-4-2018
 * Time: 15:22
 */