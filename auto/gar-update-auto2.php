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
</head>
<body>
<h1>Garage update op klant 2</h1>
<p>Dit formulier wordt gebruikt om klantgegevens te wijzigen.</p>


<?php
$klantid = $_POST["klantidvak"];
require_once "../gar-connect.php";

$autos = $database->prepare(
    "SELECT * FROM auto WHERE klantid = :klantid"
);
$autos->execute(["klantid" => $klantid]);

echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto){
    echo "klantid:" . $auto["klantid"];
    echo "<input type='hidden' name='klantvakid' ";
    echo "value='" . $auto["klantid"] . "'><br/> ";

    echo "autokenteken: <input type='text'";
    echo "name = 'klantvaknaam'";
    echo "value='" . $auto["autokenteken"] . "'><br/> ";

    echo "automerk: <input type='text'";
    echo "name = 'automerkvak'";
    echo "value='" . $auto["automerk"] . "'><br/> ";

    echo "autotype: <input type='text'";
    echo "name = 'autotype'";
    echo "value='" . $auto["autotype"] . "'><br/> ";

    echo "autokmstand: <input type='text'";
    echo "name = 'autokmstandvak'";
    echo "value='" . $auto["autokmstand"] . "'><br/> ";

}
echo "<input type='submit'>";
echo "</form>";
?>
</body>

</html>
