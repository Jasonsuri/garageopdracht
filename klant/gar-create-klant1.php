<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>gar-create-klant1.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
    <link href="../css/menustyles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
          integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>
<body>
<h1>Garage create klant</h1>
<p>Dit formulier wordt gebruikt om klantgegevens in te voeren.</p>


<form action="gar-create-klant2.php" method="post">
    <label for="klantnaamvak" id="klantnaamvak">Klantnaaam:</label>
    <input type="text" name="klantnaamvak"> <br/>
    <label for="klantadresvak" id="klantadresvak">Adres:</label>
    <input type="text" name="klantadresvak"> <br/>
    <label for="klantpostcodevak" id="klantpostcodevak">Postcode:</label>
    <input type="text" name="klantpostcodevak"> <br/>
    <label for="klantplaatsvak" id="klantplaatsvak">Plaats:</label>
    <input type="text" name="klantplaatsvak"> <br/>
    <input type="submit">
</form>
</body>

</html>

<?php