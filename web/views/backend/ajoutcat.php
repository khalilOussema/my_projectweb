<?php
if(isset($_POST['nom']) && isset($_POST['description']))
{
	include '../../core/categorieC.php';
	include '../../entites/categorie.php';
	$a=$_POST['nom'];
	$b=$_POST['description'];
	$categorie=new categorie($a,$b);
	$categorieC=new categorieC();
	$categorieC->ajoutercategorie($categorie);
	header('Location: http://localhost/web/views/backend/affichagecategorie.php');


}
?>