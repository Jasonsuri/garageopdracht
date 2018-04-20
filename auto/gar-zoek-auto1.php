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
</head>
<body>
<h1>Garage zoek op klantid 1</h1>
<p>Dit zijn alle gegevens uit de tabel klanten van de database garage</p>
<form action="gar-zoek-auto2.php" method="post">
    Welke klant zoekt u?
    <input type="text" name="klantidvak" <br/>
    <input type="submit">
</form>
</body>

</html>
