<?php
require_once('project.class.php');
$us=new Client();
$us-> supprimerclient($_GET['id_client']);
header('location:liste_clients.php');
?>
