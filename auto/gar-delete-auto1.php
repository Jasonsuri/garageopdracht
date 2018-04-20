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
<form action="gar-delete-auto2.php" method="post">
    Welk klantid wilt u verwijderen?
    <input type="text" name="klantidvak"<br/>
    <input type="submit">
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 11-4-2018
 * Time: 09:36
 */