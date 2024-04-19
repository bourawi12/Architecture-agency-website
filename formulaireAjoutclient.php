<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php      
     require_once "header.php";
     require_once "session.php";
     Verifier_session();
    require_once "connexion.php";

    ?>
<form action="enregistrement.php" method="post" enctype="multipart/form-data">

    <div class="col-md-6 col-xs-12">  
        <div class="panel panel-info"> 
            <h1 class= 'panel-heading'>Ajouter projets</h1>
            <div class= 'panel-body'> 
<table  class='table table-striped'>
    <tr>
   <td>ID :</td> 
   <td><input type="text" name="id" disabled size="20"/></td></tr>
   <tr>
<td>nom et prenom :</td>
<td><input type="text" name="nom" size="20"/></td></tr>
<tr>
<td>emplacement :</td>
<td><input type="text" name="type" size="20"/></td></tr>
    <tr>
<td>nombre d'étoiles :</td>
<td><select name="nb_etoile">
    
    
    <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
       
    </select></td></tr>
    <tr>
        <td>avis :</td>
        <td><input type="text" name="type" size="20"/></td></tr>
    
   

</table>
<br/>
<input type="submit" value="Envoyer"/><br/>
</div>   </div></div>

</form>
</body>
</html>