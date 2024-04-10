
<?php
class connexion
{ 
public function CNXbase()
  {
    $dbc=new PDO('mysql:host=localhost;dbname=architecture','root',''); 
    return $dbc;
  }   
}
?>
