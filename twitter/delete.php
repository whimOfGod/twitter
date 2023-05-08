<?php
    require "template/connexion.php";
    $supp = $database->prepare("DELETE FROM tweets WHERE tweets_id = :tweets_id");
    $supp->execute([
        "tweets_id" => $_POST['supp'],
    ]);
    header("Location: index.php");
?>