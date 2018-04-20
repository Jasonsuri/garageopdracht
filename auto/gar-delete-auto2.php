<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <title>gar-delete-klant1.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>garage delete klant</h1>
<p>Dit formulier zoekt een klant uit de tabel klanten van database garage om hem te kunnen verwijderen</p>


<?php
$klantid = $_POST["klantidvak"];
require_once "../gar-connect.php";

$autos = $database->prepare("
SELECT * FROM auto WHERE klantid = :klantid");
$autos->execute(["klantid" => $klantid]);

echo "<table>";
foreach($autos as $auto){
    echo "<tr>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<tr>";
}
echo "</table><br/>";

echo "<form action='gar-delete-auto3.php' method='post'>";
echo "<input type='hidden' name='klantidvak' value=$klantid>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder deze klant. <br/>";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
