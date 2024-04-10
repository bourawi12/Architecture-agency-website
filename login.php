<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>


<?php
    session_start();

    require_once "compte.class.php";
    $us=new compte();
    if (isset($_POST['login'])){
        $us->user =$_POST["login"];
        $us->pwd =$_POST["pwd"];
 
        try{
            $res = $us->getUser();         
            $data = $res->fetchAll(PDO::FETCH_ASSOC);            
            if ($data){
                $_SESSION["connecte"]="1";
                $_SESSION["user"]=$data[0]["user"];
                header("location:liste_projects.php");
                exit();
            }
            else
                echo "aucun utilisateur";
            }
        catch (PDOException $e){
            echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
        }
    }
?>
<body>
    <form action="login.php" method="post">
        <h1> <em> Se connecter        </em></h1>
        <br>
        <table  class='table table-striped'>
      <tr> <td> <label for="login">Utilisateur :</label> </td>
      <td> <input type="text" name="login" id="login" ><br> </td>  </tr>
        <tr> <td><label for="pwd">Mot de Passe : </label></td>
        <td><input type="password" name="pwd" id="pwd"> <br> </td> </tr>
        <tr> <td> <input type="submit" value="Connecter"></td> <td>  </td>   </tr>
        <table>
    </form>

</body>
</html>
