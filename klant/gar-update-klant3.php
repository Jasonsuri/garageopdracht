<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>garage update klant 3</title>
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage update klant</h1>
<p>Dit zijn alle gegevens uit de tabel klanten van de database garage</p>
<?php

$klantid = $_POST["klantidvak"];
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

require_once "../gar-connect.php";

$sql = $database->prepare(
    "UPDATE klant SET klantnaam = :klantnaam,
klantadres = :klantadres,
klantpostcode = :klantpostcode,
klantplaats = :klantplaats
WHERE klantid = :klantid"

);
$sql->execute();

$sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats
]);

?>
</body>

</html>
