<?php
    require_once "project.class.php";
    $et=new Project();
    
/* récupération des données du formulaire */

$et->title = $_POST['title'];
$et->type = $_POST['type'];
$et->emplacement = $_POST['emplacement'];
$et->surface = $_POST['surface'];
$et->annee = $_POST['annee'];
$et->statut = $_POST['statut'];
$et->img_princ=$_FILES['img_princ']['name'];
$fichierTemp=$_FILES['img_princ']['tmp_name'];
$et->img_sec=$_FILES['img_sec']['name'];
$fichierTemp2=$_FILES['img_sec']['tmp_name'];
move_uploaded_file($fichierTemp, 'assets/img/'.$_FILES['img_princ']['name'] );
move_uploaded_file($fichierTemp2, 'assets/img/'.$_FILES['img_sec']['name'] );
$et->insertProject();
header('location:liste_projects.php');


 ?>