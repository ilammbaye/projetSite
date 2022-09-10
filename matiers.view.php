<?php require_once('partials/_header.php'); 
  require_once('classes/matiers.php'); 

  $tab = [
      new matiers("Mathematique","image1/math.jpg"),
      new matiers("Science-physique","image1/pc.jpg"),
      new matiers("Svt","image1/svt.png"),
      new matiers("Arabe","image1/arabe.jpg"),
      new matiers("philosophie","image1/philo.jpg"),
      new matiers("Anglais","engl.avif"),
  ];

?>

  <h1 class="text-center">Liste des Matiers</h1>
  <div class="row text-center d-flex">
    <?php foreach($tab as $matiers):?>
    <div class="card col-md-3 mr-5 shadow-lg mb-2">
      <img src="<?= $matiers->getImage() ?>" style="height:250px;"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title bg-warning"><?= $matiers->getNom() ?></h5>
        <p class="card-text text-danger" >
          Primaire-College-Lycee
    </p>
      </div>
    </div>
    <?php endforeach;?>
  </div>

<?php require_once("partials/_footer.php"); ?>