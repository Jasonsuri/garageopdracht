<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <title>gar-delete-klant1.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>garage delete klant</h1>
<p>Dit formulier zoekt een klant uit de tabel klanten van database garage om hem te kunnen verwijderen</p>


<?php
$klantid = $_POST["klantidvak"];
require_once "../gar-connect.php";

$klanten = $database->prepare("
SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

echo "<table>";
foreach($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "<tr>";
}
echo "</table><br/>";

echo "<form action='gar-delete-klant3.php' method='post'>";
echo "<input type='hidden' name='klantidvak' value=$klantid>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder deze klant. <br/>";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
