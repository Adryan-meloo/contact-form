<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $flexRadioDefault = htmlspecialchars($_POST["flexRadioDefault"]);
    $message = htmlspecialchars($_POST["message"]);
    $consent = htmlspecialchars($_POST["consent"]);

    echo $firstname; 
    echo "<br>";
    echo $flexRadioDefault;
    echo "<br>";
    echo $message;
    echo "<br>";
    echo $consent;

    header("Location: ../index.php");
} else {
    
}
