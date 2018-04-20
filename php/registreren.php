<?php
session_start();
require_once "../gar-connect.php";
require_once "../gar-menu.php";

$gebruikersnaam = $_POST["gebruikersnaam"];
$email = $_POST["email"];
$wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

$_SESSION["gebruikersnaam"] = $gebruikersnaam;
$_SESSION["email"] = $email;
$_SESSION["wachtwoord"] = $wachtwoord;

$checkUser = $database->prepare("SELECT * FROM users WHERE gebruikersnaam = :gebruikersnaam");
$checkUser->bindParam(":gebruikersnaam", $gebruikersnaam);
$checkUser->execute();
$checkUser->fetch();

if($checkUser->rowCount() < 1){
    $insertUser = $database->prepare("INSERT INTO users (gebruikersnaam, email, wachtwoord) VALUE (:gebruikersnaam, :email ,:wachtwoord)");
    $insertUser->bindParam(":gebruikersnaam", $gebruikersnaam);
    $insertUser->bindParam(":wachtwoord", $wachtwoord);
    $insertUser->bindParam(":email", $email);
    $insertUser->execute();
    echo "U kunt nu inloggen!";
} else{
    echo "Foutmelding! Gebruiker bestaat al.";
}