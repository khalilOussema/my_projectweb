<?php
include 'config.php';
/**
 * 
 */
class productC
{
	
	function ajouterproduit($product)
	{
	$query=" INSERT INTO `produit`(`nom`, `auteur`, `prix`, `description`, `stock`, `categorie`, `image`) VALUES (:nom,:auteur,:prix,:description,:stock,:categorie,:image)";
          	//$aa=$product->getReference();
     		$ab=$product->getNom();
     		$ac=$product->getAuteur();
     		$ad=$product->getPrix();
      		$af=$product->getImages();
    	 	$ag=$product->getDescription();
   		 	$ai=$product->getStock();
            $aj=$product->getCategorie();
    		$db=config::getConnexion();
    		$req=$db->prepare($query);
		$req->bindValue(':nom',$ab);
    	$req->bindValue(':auteur',$ac);
 	    $req->bindValue(':prix',$ad);
 	    $req->bindValue(':description',$ag);
	    $req->bindValue(':stock',$ai);
        $req->bindValue(':categorie',$aj);
        $req->bindValue(':image',$af);
    if($req->execute())
       // var
        echo "ok";
     else
        var_dump('error');
        print_r($req->errorinfo());
	}
	function afficherproduct()
	{
		$req="SELECT * FROM `produit`";
		$db=config::getConnexion();
		$list=$db->query($req);
		return $list;
	}
}
?>