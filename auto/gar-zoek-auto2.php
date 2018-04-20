<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">

<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>gar-zoek-klant2.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage zoek op klantid 2</h1>
<p>Zoeken op klantid</p>


<?php
$klantid = $_POST["klantidvak"];
require_once "../gar-connect.php";

$sql = $database->prepare(
    "SELECT * FROM auto WHERE klantid = :klantid"
);
$sql->execute(["klantid" => $klantid]);

echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<tr>";
}
echo "</table>";
?>
</body>

</html>
