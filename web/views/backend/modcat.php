<?php
include '../../core/config.php';
if(isset($_POST['nom']) && isset($_POST['description'])  )
{
	$a=$_POST['nom'];
	
	$d=$_POST['description'];
	
	$id=$_POST['idd'];
	$db=config::getConnexion();
	$req="UPDATE `categorie` SET `nom` = '$a',`description` = '$d' WHERE `categorie`.`id` = '$id'";
	$db->query($req);
	header('Location: http://localhost/web/views/backend/affichagecategorie.php');

}
?>