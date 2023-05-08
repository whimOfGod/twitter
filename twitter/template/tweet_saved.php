<?php
    require "connexion.php";
    $user_id = 10 ;
    //préparation de la requête SQL d'insertion qui insère les valeurs du tweet dans la table tweets
    $insert = $database->prepare("INSERT INTO tweets (tweets_id, tweet, user_id) VALUES (:tweets_id, :tweet, :user_id)");
    $insert->execute(
        [
            ":tweets_id" => null,
            ":tweet" => $_POST['tweet'],
            ":user_id" => $user_id
        ]
    );
    header("Location: ../index.php");
?>
