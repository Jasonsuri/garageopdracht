<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
</head>
<body>
<h1>Garage create auto 2</h1>
<p>Een auto toevoegen aan de tabel auto in de database garage.</p>


<?php



$klantid = $_POST["klantidvak"];
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];


require_once "../gar-connect.php";
$sql = $database->prepare("INSERT INTO auto VALUES 
(:klantid, :autokenteken, :automerk, :autotype, :autokmstand)");

$sql->execute([
    "klantid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand
            ]);

echo "De auto is toegevoegd! <br/>";
?>
</body>
</html>