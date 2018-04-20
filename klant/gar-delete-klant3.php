<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
<title>gar-delete-klant3.php</title>
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete klant</h1>
<p>Op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden.</p>
<?php
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

if($verwijderen){
    require_once "../gar-connect.php";
    $sql = $database->prepare("DELETE FROM klant WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);
    echo "De gegevens zijn verwijderd.";


} else {
    echo "De gegevens zijn niet verwijderd";
}
echo "<a href='../gar-menu.php'>terug naar het menu.</a>";
?>
</body>
</html>
