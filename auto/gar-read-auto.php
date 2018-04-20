<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <title>gar-read-klant.php</title>
</head>
<body>
<h1>Garage read klant</h1>
<p>Dit zijn alle gegevens uit de tabel klanten van de database garage</p>


<?php
require_once "../gar-connect.php";

$sql = $database->prepare(
    "SELECT * FROM klant INNER JOIN auto ON klant.klantid = auto.klantid"
);
$sql->execute();
$result = $sql->fetchAll();

echo "<table id='autos'>";
foreach ($result as $rij){
    echo "<tr>";
    echo "<th> Klant ID </th>";
    echo "<th> Klant naam </th>";
    echo "<th> Auto kenteken </th>";
    echo "<th> Auto merk </th>";
    echo "<th> Auto type </th>";
    echo "<th> Auto kilometerstand </th>";
    echo "<tr/>";
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<tr/>";
}
echo "</table>";

?>
</body>

</html>
