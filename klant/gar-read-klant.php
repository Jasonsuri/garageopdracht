<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
    <title>gar-read-klant.php</title>

</head>
<body>
<h1>Garage read klant</h1>
<p>Dit zijn alle gegevens uit de tabel klanten van de database garage</p>

<?php
require_once "../gar-connect.php";

$sql = $database->prepare(
    "SELECT * FROM klant"
);
$sql->execute();

echo "<table id='klanten'>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<th> Klant ID </th>";
    echo "<th> Naam </th>";
    echo "<th> Straat </th>";
    echo "<th> Postcode </th>";
    echo "<th> Woonplaats</th>";
    echo "<tr/>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "<tr>";
}
echo "</table>";
echo "<div class='backtomenu'><a href='../gar-menu.php'>Klik hier om terug te gaan naar het menu.</a></div>"
?>
</body>

</html>
