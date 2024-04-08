<?php
require_once "header.php";
require_once "session.php";
Verifier_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des projets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
require_once('project.class.php');
$us = new Project();
$res = $us->listeprojects();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1>Liste des projets</h1>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Emplacement</th>
                                <th>Surface</th>
                                <th>Annee</th>
                                <th>Statut</th>
                                <th>Image Principale</th>
                                <th>Image Secondaire</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($res as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['emplacement']; ?></td>
                                <td><?php echo $row['surface']; ?></td>
                                <td><?php echo $row['annee']; ?></td>
                                <td><?php echo $row['statut']; ?></td>
                                <td><img src="assets/img/<?php echo $row['img_princ']; ?>" width="50" height="50"></td>
                                <td><img src="assets/img/<?php echo $row['img_sec']; ?>" width="50" height="50"></td>
                                <td>
                                    <a href="delete.php?id_etd=<?= $row['id']; ?>">Supprimer</a>
                                    <a href="modifForm.php?id_etd=<?php echo $row['id']; ?>">Modifier</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
