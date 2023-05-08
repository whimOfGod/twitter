<?php 
// connexion à la base de donnée
     require "template/connexion.php";
     //préparation , exécution, récupérer tous les résultats sous forme d'un tableau associatif dans la variable
        $requete = $database->prepare(" SELECT * FROM users ");
        $requete->execute();
        $suscribed = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="suscribBody">
    
    <main class="suscribMain" >
        <div class="myFormular">
            <!-- formulaire d'inscription  -->
            <form class="myFormularContent" method="POST" action="template/saved.php" >
                <h2 class="titleFormular" >Formulaire</h2>
                    <input type ="text" name ="nom" placeholder=" ex: jack sparrow " required>
                    <input type ="text" name ="pseudo" placeholder=" ex: pirate98 " required>
                    <input type="email" name = "mail" placeholder = " ex: jhonnydeep@gmail.com" >
                    <input type="password" name = "my_password" placeholder = " ********** " max="20" min="0">
                <button class="mySubmitButton" type="submit"> valider </button>
            </form>
        </div>
    </main>
    

</body>
</html>