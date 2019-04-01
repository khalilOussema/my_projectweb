<?php

class categorie
{
	private $id;
	private $nom;
	private $description;

	 public function __construct($b,$c) {
            
            $this->nom=$b;
            $this->description=$c;
       }
    public function getDescription() {return $this->description;}
    public function getNom() {return $this->nom;}

    public function setNom($nm) {$this->nom=$nm;}
    public function setDescription($de) {$this->description=$de;}

}

?>