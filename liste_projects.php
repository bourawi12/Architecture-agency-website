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
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
 <?php
require_once('project.class.php');
$us=new Project();
$res=$us->listeprojects();
?>

<div class="col-md-6 col-xs-12 ">  
<div class="panel panel-info"> 
    <h1 class= 'panel-heading'>Liste des projets</h1>
    <div class= 'panel-body'> 
        

                <table border=1 class="table table-striped">
                <tr> <td> id </td> <td> title </td> <td> type </td><td> emplacement </td><td>surface</td> <td> année </td><td>statut</td><td> img_princ </td><td>img_sec</td> </tr>
                  <?php foreach ($res as $row){?>
                           <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['title']?></td>
                          <td><?php echo $row['type']?></td>
                          <td><?php echo $row['emplacement']?></td>
                          <td><?php echo $row['surface']?></td>
                          <td><?php echo $row['année']?></td>
                          <td><?php echo $row['statut']?></td>
                          <td>  <img src= "asssets/img/<?php echo $row['img_princ']?>" width="50" height="50">     </td>
                          <td>  <img src= "asssets/img/<?php echo $row['img_sec']?>" width="50" height="50">     </td>
                          <td><a href="delete.php?id_etd=<?= $row['id'];?>">Supprimer</a> 
                           <a href="modifForm.php?id_etd=<?php echo $row['id'];?>">Modifier</a> </td>
                           </tr> <?php }?>                 
                </table>
                </div>   </div></div>
               

</body>
</html>