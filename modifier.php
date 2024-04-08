<?php
require_once('project.class.php');
$et = new Project(); 

// Check if form fields are set before accessing them
$id = isset($_POST['id']) ? $_POST['id'] : null;
$title = isset($_POST['ftitle']) ? $_POST['ftitle'] : null;
$type = isset($_POST['ftype']) ? $_POST['ftype'] : null;
$emplacement = isset($_POST['emplacement']) ? $_POST['emplacement'] : null;
$surface = isset($_POST['surface']) ? $_POST['surface'] : null;
$annee = isset($_POST['annee']) ? $_POST['annee'] : null;
$statut = isset($_POST['statut']) ? $_POST['statut'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;

// Set the project attributes
$et->id = $id;
$et->title = $title;
$et->type = $type;
$et->emplacement = $emplacement;
$et->surface = $surface;
$et->annee = $annee;
$et->statut = $statut;
$et->description = $description;
$et->img_princ = isset($_FILES['img_princ']['name']) ? $_FILES['img_princ']['name'] : null;
$et->img_sec = isset($_FILES['img_sec']['name']) ? $_FILES['img_sec']['name'] : null;

// Check if images are provided and move them
if ($et->img_princ != "") {
    $fichierTemp1 = isset($_FILES['img_princ']['tmp_name']) ? $_FILES['img_princ']['tmp_name'] : null;
    if ($fichierTemp1 !== null) {
        move_uploaded_file($fichierTemp1, 'assets/img/' . $et->img_princ);
    }
}

if ($et->img_sec != "") {
    $fichierTemp2 = isset($_FILES['img_sec']['tmp_name']) ? $_FILES['img_sec']['tmp_name'] : null;
    if ($fichierTemp2 !== null) {
        move_uploaded_file($fichierTemp2, 'assets/img/' . $et->img_sec);
    }
}

// Modify project details in the database
$et->modifierprojphoto($id);
header('location:liste_projects.php');
?>
