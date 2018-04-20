<?php
include_once "../html/menustyles.html";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jason Mohab-Ali">
    <meta charset="UTF-8">
    <title>gar-create-auto1.php</title>
    <link href="../css/garage.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage create auto</h1>
<p>Dit formulier wordt gebruikt om autogegevens in te voeren.</p>

<form action="gar-create-auto2.php" method="post">
    <label for="klantidvak" id="klantidvak">KlantID:</label>
    <input required type="text" name="klantidvak"><br/>
    <label  for="autokentekenvak" id="autokentekenvak">Kenteken:</label>
    <input required type="text" name="autokentekenvak"> <br/>
    <label for="automerkvak" id="automerkvak">Auto merk:</label>
    <input required type="text" name="automerkvak"> <br/>
    <label for="autotypevak" id="autotypevak">autotype:</label>
    <input required type="text" name="autotypevak"> <br/>
    <label for="autokmstandvak" id="autokmstandvak">Kilometerstand:</label>
    <input required type="text" name="autokmstandvak"> <br/>
    <input type="submit">
</form>
</body>

</html>

<?php