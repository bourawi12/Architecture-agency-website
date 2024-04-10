<?php
require_once('project.class.php');
$us=new Project();
$us-> supprimerproj($_GET['id_proj']);
header('location:liste_projects.php');
?>
