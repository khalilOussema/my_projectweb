<?php
include '../../core/config.php';
$db=config::getConnexion();
$id=$_GET['id'];
$req="DELETE FROM `categorie` WHERE id='$id'";
$db->query($req);
header('Location: http://localhost/web/views/backend/affichagecategorie.php');


?>