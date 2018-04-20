<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage update op klant 2</h1>
<p>Dit formulier wordt gebruikt om klantgegevens te wijzigen.</p>

<?php
$klantid = $_POST["klantidvak"];
require_once "../gar-connect.php";

$klanten = $database->prepare(
    "SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid"
);
$klanten->execute(["klantid" => $klantid]);

echo "<form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant){
    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantvakid' ";
    echo "value='" . $klant["klantid"] . "'><br/> ";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantvaknaam'";
    echo "value='" . $klant["klantnaam"] . "'><br/> ";

    echo "klantadres: <input type='text'";
    echo "name = 'klantadresvak'";
    echo "value='" . $klant["klantadres"] . "'><br/> ";

    echo "klantpostcode: <input type='text'";
    echo "name = 'klantpostcode'";
    echo "value='" . $klant["klantpostcode"] . "'><br/> ";

    echo "klantplaats: <input type='text'";
    echo "name = 'klantplaatsvak'";
    echo "value='" . $klant["klantplaats"] . "'><br/> ";

}
echo "<input type='submit'>";
echo "</form>";
echo "<a href='gar-menu.php'>Klik hier om terug te gaan naar het menu.</a>"
?>
</body>

</html>
