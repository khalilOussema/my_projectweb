<?php
include '../../core/config.php';
if(isset($_POST['nom']) && isset($_POST['auteur']) &&  isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['stock']) )
{
	$a=$_POST['nom'];
	$b=$_POST['auteur'];
	$c=$_POST['prix'];
	$d=$_POST['description'];
	$e=$_POST['stock'];
	$id=$_POST['idd'];
	$db=config::getConnexion();
	$req="UPDATE `produit` SET `nom` = '$a', `auteur` = '$b', `prix` = '$c', `description` = '$d', `stock` = '$e' WHERE `produit`.`id` = '$id'";
	$db->query($req);
	header('Location: http://localhost/web/views/backend/affichageproduit.php');

}
?>