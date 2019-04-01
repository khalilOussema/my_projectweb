<?php
include '../../core/config.php';
$db=config::getConnexion();
$id=$_GET['id'];
$req="DELETE FROM `produit` WHERE id='$id'";
$db->query($req);
header('Location: http://localhost/web/views/backend/affichageproduit.php');


?>