<?php
require_once('project.class.php');
$et=new Project(); 
$id = $_POST['id'];
$et->title = $_POST['ftitle'];
$et->type = $_POST['ftype'];
$et->emplacement = $_POST['emplacement'];
$et->surface = $_POST['surface'];
$et->annee = $_POST['annee'];
$et->statut = $_POST['statut'];
$et->description = $_POST['description'];
$et->img_princ=$_FILES['img_princ']['name'];
$et->img_sec=$_FILES['img_sec']['name'];

$img_princ = $_FILES['img_princ']['name'];
$img_sec = $_FILES['img_sec']['name'];

if ($img_princ != "") {
    $fichierTemp1 = $_FILES['img_princ']['tmp_name'];
    move_uploaded_file($fichierTemp1, 'assets/img/' . $img_princ);
}

if ($img_sec != "") {
    $fichierTemp2 = $_FILES['img_sec']['tmp_name'];
    move_uploaded_file($fichierTemp2, 'assets/img/' . $img_sec);
}

$et->modifierprojphoto($id);
header('location:liste_projects.php');


?>
