<?php
require_once('project.class.php');

$et = new Project(); 

// Check if form fields are set before accessing them
$id = isset($_POST['id']) ? $_POST['id'] : null;
$title = isset($_POST['ftitle']) ? $_POST['ftitle'] : null;
$type = isset($_POST['ftype']) ? $_POST['ftype'] : null;
$emplacement = isset($_POST['emplacement']) ? $_POST['emplacement'] : null;
$surface = isset($_POST['fsurface']) ? $_POST['fsurface'] : null;
$annee = isset($_POST['annee']) ? $_POST['annee'] : null;
$statut = isset($_POST['fstatut']) ? $_POST['fstatut'] : null;
$description = isset($_POST['fdescription']) ? $_POST['fdescription'] : null;

// Set the project attributes
$et->id = $id;
$et->title = $title;
$et->type = $type;
$et->emplacement = $emplacement;
$et->surface = $surface;
$et->annee = $annee;
$et->statut = $statut;
$et->description = $description;






// Check if images are provided and move them
if ($_FILES['img_princ']['name'] != "") {
    $et->img_princ = $_FILES['img_princ']['name'];
    $fichierTemp1 = $_FILES['img_princ']['tmp_name'];
    move_uploaded_file($fichierTemp1, 'assets/img/' . $et->img_princ);
    $et->modifierimg_princ($id);
}

if ($_FILES['img_sec']['name'] != "") {
    $et->img_sec = $_FILES['img_sec']['name'];
    $fichierTemp2 = $_FILES['img_sec']['tmp_name'];
    move_uploaded_file($fichierTemp2, 'assets/img/' . $et->img_sec);
    $et->modifierimg_sec($id);
    
}

// Modify project details in the database
$et->modifierprojphoto($id);
header('location:liste_projects.php');
/*
if(isset($_POST['envoyer'])) {
    if(isset($_FILES['img_princ']) && isset($_FILES['img_sec']) && isset($_POST['ftitle']) && isset($_POST['ftype']) && isset($_POST['emplacement']) && isset($_POST['fsurface']) && isset($_POST['annee']) && isset($_POST['fstatut']) && isset($_POST['fdescription'])) {
        $img_princ = $_FILES['img_princ']['name']; // Filename of the uploaded file
        $image_tmp1 = $_FILES['img_princ']['tmp_name']; // Temporary location of the file
        $img_sec = $_FILES['img_sec']['name']; // Filename of the uploaded file
        $image_tmp2 = $_FILES['img_sec']['tmp_name']; // Temporary location of the file
        $title = htmlspecialchars(strip_tags($_POST['ftitle']));
        $type = htmlspecialchars(strip_tags($_POST['ftype']));
        $emplacement = htmlspecialchars(strip_tags($_POST['emplacement']));
        $surface = htmlspecialchars(strip_tags($_POST['fsurface']));
        $annee =htmlspecialchars(strip_tags($_POST['annee']));
        $statut = htmlspecialchars(strip_tags($_POST['fstatut']));
        $description = htmlspecialchars(strip_tags($_POST['fdescription']));
        
        if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            try {
                // Move the uploaded file to desired location
                move_uploaded_file($image_tmp1, "assets/img/" . $img_princ);
                modifier($title,$type,$emplacement,$surface,$annee,$statut,$img_princ,$img_sec,$id);
                header('location:liste_projects.php');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
*/
?>
