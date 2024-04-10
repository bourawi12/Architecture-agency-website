<?php        
class Compte
{
public $user;
public $pwd;

function getUser()
{
require_once('connexion.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM compte WHERE user='$this->user'and pwd='$this->pwd'";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res;
}

 } ?>
