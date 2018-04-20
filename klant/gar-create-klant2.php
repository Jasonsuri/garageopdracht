<?php
include_once "../html/menustyles.html";
?>

<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <link href="../css/menustyles.css"
    <title>gar-create-klant2.php</title>
</head>
<body>
<h1>Garage create klant 2</h1>
<p>Een klant toevoegen aan de tabel klant in de database garage.</p>


<?php


$klantid = NULL;
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];


require_once "../gar-connect.php";
$sql = $database->prepare("INSERT INTO klant VALUES 
(
:klantid, :klantnaam, :klantadres,
:klantpostcode, :klantplaats
)
");

$sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats
            ]);

echo "De klant is toegevoegd! <br/>";
echo "<a href='../gar-menu.php'>Terug naar het menu</a>";
?>
</body>
</html>