<?php require_once('partials/_header.php'); 
    require_once('classes/professeur.php');


  $tab = [
    new professeur("Mamadou", "ndaw", 777196425 ,"Master2 en science nature"),
    new professeur("Assane", "sognane", 776286800,"Master2 anglais" ),
    new professeur("Moussa", "ndaw", 777257486,"Licence"),
    new professeur("Baba", "lo", 771605003,"Master2 math physique informatique"),
    new professeur("Ouzin", "lom", 778151298,"Master2 en science nature"),
    new professeur("Ilam","mbaye",779481603,"Licence  en pysique chimie et Developpeur web"),
    new professeur("Ramatoulaye","top",784909395,"Etudiante"),
    new professeur("Djiby", "ngom",773068626,"Etudiant UVS"),
];

?>



<h1 class="text-center">Liste des profseurs</h1>
  <div class="row text-center d-flex ">
    <?php foreach($tab as $prof):?>
    <div class="card col-md-3 mr-5 shadow-lg mb-2">
        <div class="card-header bg-warning"><?= $prof->getPrenom() ?></div>
      <div class="card-body bg-dark">
        <h5 class="card-title text-white"><?=$prof->getNom() ?></h5>
        <p class="card-text text-white">
           <?= $prof->getNumero() ?>  <br>
           <?= $prof->getNiveau() ?>  <br>
        </p>
      </div>
    </div>
    <?php endforeach;?>
  </div>

<?php require_once('partials/_footer.php'); ?>