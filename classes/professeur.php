<?php class professeur {

    private $prenom;
    private $nom;
    private $numero;
    private $niveau;
      
     public function __construct($prenom,$nom,$numero,$niveau){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->numero=$numero;
        $this->niveau=$niveau;

     }

  

     public function getPrenom(){return $this->prenom;}
      public function getNom(){return $this->nom;}
      public function getNumero(){return $this ->numero;}
      public function getNiveau(){return $this ->niveau;}

}