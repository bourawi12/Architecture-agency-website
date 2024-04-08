<?php
    
    require_once("etudiant.class.php");
     $e= new Project();
     $e->title="projet1";
     $e->type= "RESIDENTIEL";
     $e->emplacement= "Tunis";
     $e->surface= "1300";
     $e->année="2000";
     $e->statut= "etude";
     $e->insertProject();
?>