<?php
include '../../core/config.php';
$db=config::getConnexion();
if(isset($_POST['number']) && isset($_POST['idd']))
	{
		$a=$_POST['number'];
		$id=$_POST['idd'];
		
		$sql="SELECT * FROM produit WHERE id='$id'";
		$list=$db->query($sql);
		foreach($list as $row)
		{
			$n=$row['stock'];
			
				}
	
		$c=$n+$a;
		$req="UPDATE `produit` SET `stock` = '$c' WHERE `produit`.`id` = '$id'";
		$db->query($req);
		header('Location: http://localhost/web/views/backend/affichageproduit.php');

	}
?>