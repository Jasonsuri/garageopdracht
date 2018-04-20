<?php
session_start();
include_once "../gar-connect.php";
require "../html/menustyles.html";


// schrijft de sql query //
$selectUser = $database->prepare("SELECT * FROM users WHERE gebruikersnaam=:gebruikersnaam");
//koppelt de pdo variable//
$selectUser->bindParam(":gebruikersnaam", $_POST['gebruikersnaam']);
// voert de query uit //
$selectUser->execute();

if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])){

    if ($selectUser->rowCount() == 1){
        // haalt de resultaten uit de database
        $user = $selectUser->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['wachtwoord'], $user['wachtwoord'])) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Inloggen</title>
                <link href="../css/garage.css" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
            </head>
            <body>
            </body>
            </html>
            <?php

            $_SESSION['gebruikersnaam'] = $user['gebruikersnaam'];
            $_SESSION['usersid'] = $user['usersid'];
            $_SESSION['admin'] = $user['admin'];
            $_SESSION['email'] = $user["email"];
        } else {
            ?>
            <main><h1><?php print 'wachtwoord is fout!' . "</br>" ?> <a href="../html/index.html"> <?php print'probeer het opnieuw'; ?></a></h1></main>
            <?php
            session_destroy();
        }
    } else {
        print "gebruikersnaam bestaat niet";
        session_destroy();
    }
}
if (isset($_SESSION['gebruikersnaam'])){

    $admin = $_SESSION['admin'];

    if (isset($admin)) {
        if ($admin == 1) {
            $sql = $database->query("SELECT * FROM users");
            $sql->execute();
            if ($sql->rowCount() > 0) {
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Inloggen</title>
                    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
                    <link href="../css/garage.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
                </head>
                <body>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <main>
                    <h2><?php print "Hier onder vind u alle gegevens:";?></h2>
                    <table id="users" border="1">
                        <tr>
                            <th><i class="fas fa-list-ol"></i> Inlog Id</th>
                            <th><i class="fas fa-address-card"></i> Naam</th>
                            <th><i class="fas fa-envelope"></i> E-mail</th>
                            <th><i class="far fa-clipboard"></i> Admin</th>
                            <th><i class="fas fa-exchange-alt"></i> Wijzigen</th>
                            <th><i class="fas fa-trash-alt"></i> Verwijderen</th>
                        </tr>
                        <?php
                        foreach ($sql as $gebruiker) {
                            print "<tr>";
                            print "<td>" . $gebruiker['usersid'] . "</td>";
                            print "<td>" . $gebruiker['gebruikersnaam'] . "</td>";
                            print "<td>" . $gebruiker['email'] . "</td>";
                            print "<td>" . $gebruiker['admin'] . "</td>";
                            print "<td>" . 'wijzigen' . "</td>";
                            print "<td>" . 'verwijderen' . "</td>";
                            print "</tr>";
                        }
                        ?>
                    </table>
                </body>
                </html>
                <?php

            } else {
                print "geen users";
            }
        }else {
            print "geen rechten";
        }
    } else {
        print "je bent niet ingelogd";
    }



}



?>
