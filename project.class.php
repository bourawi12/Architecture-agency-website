<?php        
class Project
{
/* attributs de la classe utilisateur*/
	
public $id;
public $title;
public $type;
public $emplacement;
public $surface;
public $annee;
public $statut;
public $img_princ;
public $img_sec;
/* constructeur de la classe */

function insertProject()
{
    require_once('connexion.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "INSERT INTO `projects`(`title`, `type`, `emplacement`, `surface`, `annee`, `statut`, `description`, `img_princ`, `img_sec`)
            VALUES ('$this->title','$this->type','$this->emplacement','$this->surface','$this->annee','$this->statut','$this->description','$this->img_princ','$this->img_sec')";

    $pdo->exec($req) or print_r($pdo->errorInfo());
}
function listeprojects()
{
require_once('connexion.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
          
$req="SELECT * FROM projects";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res; 
}


function getproj($id)
{
require_once('connexion.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM projects where id=$id";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res;
}
function modifier($title,$type,$emplacement,$surface,$annee,$statut,$img_princ,$img_sec,$id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE `projects` SET `title`=?, `type`=?, `emplacement`=?, `surface`=?, `annee`=?, `statut`=?, `description`=? WHERE id=?");

    $req->execute(array($title,$type,$emplacement,$surface,$annee,$statut,$img_princ,$img_sec,$id));

    $req->closeCursor();
  }
}

function modifierproj($id)
{
require_once('connexion.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE `projects` SET `title`='$this->title', `type`='$this->type', `emplacement`='$this->emplacement', `surface`='$this->surface', `annee`='$this->annee', `statut`='$this->statut',`description`='$this->description', `img_princ`='$this->img_princ', `img_sec`='$this->img_sec' WHERE id=$id";

//$req="UPDATE `projects` SET `title`='$this->title',`type`='$this->type',`emplacement`='sexe='$this->type',`surface`='$this->surface',`annee`='$this->annee',`statut`='$this->statut',`img_princ`='$this->img_princ',`img_sec`='$this->img_sec'  WHERE id=$id";
//$req="UPDATE projects SET  nom='$this->nom', prenom='$this->prenom', sexe='$this->sexe', an_naissance=$this->an_naissance, photo='$this->photo' WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function modifierprojphoto($id)
{
require_once('connexion.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE `projects` SET `title`='$this->title', `type`='$this->type', `emplacement`='$this->emplacement', `surface`='$this->surface', `annee`='$this->annee', `statut`='$this->statut',`description`='$this->description' WHERE id=$id";

//$req="UPDATE etudiant SET  `title`='$this->title',`type`='$this->type',`emplacement`='sexe='$this->type',`surface`='$this->surface',`annee`='$this->annee',`statut`='$this->statut' WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}
function modifierimg_princ($id)
{
    require_once('connexion.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "UPDATE `projects` SET `img_princ`='$this->img_princ' WHERE id=$id";
    $pdo->exec($req) or print_r($pdo->errorInfo());
}

function modifierimg_sec($id)
{
    require_once('connexion.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "UPDATE `projects` SET `img_sec`='$this->img_sec' WHERE id=$id";
    $pdo->exec($req) or print_r($pdo->errorInfo());
}


function supprimerproj($id)
{
require_once('connexion.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();

$req="DELETE FROM projects WHERE id='$id'"; 
$pdo->exec($req);
}

//fin de la classe
 } ?>
