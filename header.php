<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
            session_start();

    ?>
    <header class='nav navbar'>
        <span class="gauche"><a href="#"><?= $_SESSION["user"]?></a></span>
        <span>
            <a href="liste_projects.php">Liste des projets</a>
            <a href="formulaireAjout.php">Ajouter un projets</a>
        </span>
        <span class="droite">
            <a href="deconnexion.php">Déconnexion</a>
        </span>

    </header>
</body>
</html>