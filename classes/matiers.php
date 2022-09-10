<?php
class matiers{
    private $nom;
    private $image;

    public function __construct($nom,$image){
        $this->nom = $nom;
        $this->image = $image;
    }

    public function getNom(){return $this->nom;}
    public function getImage(){return $this->image;}
}