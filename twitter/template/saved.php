<?php
    require "connexion.php";
    $insert = $database->prepare("INSERT INTO users (nom, pseudo, mail, my_password) VALUES (:myName, :myPseudo, :myMail, :myPassword) ");
    $insert->execute(
        [
            "myName" => $_POST['nom'],
            "myPseudo" => $_POST['pseudo'],
            "myMail" => $_POST['mail'],
            "myPassword" => $_POST['my_password'],
        ]
    );
    //redirection vers la page d'accueil
    header("Location: ../index.php");
?>