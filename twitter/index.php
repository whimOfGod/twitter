<?php 
    //initialisation de la variable $order
    $order = '';
    //vérification de l'existence la variable dans l'URL 
        if (isset($_GET['order'])) {
            if ($_GET['order'] == 'asc') {
                // faire un Tri du plus ancien au plus récent
                $order = 'ORDER BY date ASC'; 
            } elseif ($_GET['order'] == 'desc') {
                // faire un Tri du plus récent au plus ancien
                $order = 'ORDER BY date DESC'; 
            }
        };
    // connexion à la base de donnée
    require "template/connexion.php";
    //ligne (17) préparation , ligne (18):exécution, ligne(20) récupérer tous les résultats sous forme d'un tableau associatif dans la variable
    $requete = $database->prepare(" SELECT * FROM tweets INNER JOIN users ON tweets.user_id = users.users_id $order");
    $requete->execute();
    //on définit une variable qui va stocker notre requête 
    $tweets = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>twitter</title>
    <script src="https://kit.fontawesome.com/c6879e030e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <main id="mainContent" >
        <nav>   
            <h1>twitter</h1>
            <ul>
                <a href="#"><li># home</li></a>
                <a href="#"><li># Explore</li></a>
                <a href="#"><li># notification</li></a>
            </ul>
        </nav>
            <div class="container"> 
                <!-- sauvegarde des tweets-->
                    <form method="POST" action="template/tweet_saved.php">
                        <h3></h3>
                        <input type="hidden" name="user_id" value="10"><!-- un champ de type "hidden" nommé "user_id" dont la valeur est fixée à "10". Cette valeur devrait être remplacée par l'ID de l'utilisateur actuellement connecté. -->
                        <input type="text" name="tweet" placeholder=" un petit tweet ? " required>
                        <button type="submit" class="btn-post"> post </button>
                    </form>
                    <div class="orderClassify">
                        <a href="?order=asc">↓ anciens</a>
                        <a href="?order=desc">↑ recents</a>
                    </div>
            <!--une boucle foreach pour parcourir le tableau $tweets -->
                <?php foreach ($tweets as $element) { ?>
                    <div class="newAdd">
                        <h4><?= $element['pseudo'] ?></h4>
                        <p><?= $element['tweet'] ?> </p>
                        <h6><?= $element['date'] ?> </h6>
                        <!--  -->           
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="supp" value=" <?= $element['tweets_id']; ?> ">
                            <button class="btn-delete" type="submit">supprimer</button>
                        </form>
                    </div>
                <?php  } ?>
            </div>
            
            <form action="template/research.php" method="GET">
                <div class="searchContent">
                    <input class="inputSearch" type="search" name="research" placeholder="Rechercher des tweets">
                    <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>


    </main>
    

</body>
</html>