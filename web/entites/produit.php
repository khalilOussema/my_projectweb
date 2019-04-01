<?php
    class product {

        private $id;
        private $nom;
        private $auteur;
        private $prix;
        private $images;
        private $description;
        private $stock;
        private $categorie ;
        

 
        public function __construct($b,$d,$e,$g,$h,$k,$l) {
            
            $this->nom=$b;
            $this->auteur=$d;
            $this->prix=$e;
            $this->images=$g;
            $this->description=$h;
            $this->stock=$k;
            $this->categorie=$l;


       }
        public function getReference() {return $this->reference;}
        public function getNom() {return $this->nom;}
        public function getAuteur() {return $this->auteur;}
        public function getPrix(){return $this->prix;}
        public function getimages() {return $this->images;}
        public function getDescription() {return $this->description;}
        public function getStock() {return $this->stock;}
        public function getCategorie() {return $this->categorie;}






        public function setReference($rf) {$this->color=$cl;}
        public function setNom($nm) {$this->nom=$nm;}
        public function setAueur($at) {$this->auteur=$at;}
        public function setPrix($pr) {$this->prix=$pr;}
        public function setImages($im) {$this->images=$im;}
        public function setDescription($de) {$this->description=$de;}
        public function setStock($st) {$this->stock=$st;}
        public function setCategorie($st) {$this->categorie=$ct;}
    }
?>
