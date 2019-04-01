<?php
include 'config.php';
/**
 * 
 */
class categorieC
{

		function ajoutercategorie($categorie)
		{

		$sql="insert into categorie (`nom`,`description`) values (:nom,:description)";
		$db = config::getConnexion();
		
        $req=$db->prepare($sql);
        $nom=$categorie->getNom();
        
        $description=$categorie->getDescription();
  		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		
	
		
            $req->execute();
           
        
            print_r($req->errorinfo());
        }
	
	function affichercategorie()
	{
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}

?>