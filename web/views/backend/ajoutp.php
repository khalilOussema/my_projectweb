<?php
include '../../core/productC.php';
include '../../entites/produit.php';
$total = count($_FILES['files']['name']);
       
        $hex="";
        echo $hex;
        for($i=0; $i<$total; $i++) {
        //get the temp file path
       

        $image=addslashes($_FILES['files']['tmp_name'][$i]);
        $img=file_get_contents($image);
        $hex=$hex.base64_encode($img).'$$$$';
       
  	
			} 


			if(isset($_POST['nom']) && isset($_POST['auteur']) && isset($_POST['stock']) && isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['categorie'])) 
			{
				
				$produit= new product($_POST['nom'],$_POST['auteur'],$_POST['prix'],$hex,$_POST['description'],$_POST['stock'],$_POST['categorie']);
				$productC= new productC();
				$productC->ajouterproduit($produit);
				header('Location: http://localhost/web/views/backend/affichageproduit.php');
			}
?>