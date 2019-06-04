<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 2</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 3 - Exercice 2</h1>
                <p class="lead">Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
                Tant que la première variable n'est pas supérieure à 20 :

                - multiplier la première variable avec la deuxième;
                - afficher le résultat;
                - incrementer la première variable.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $secondNumber = 65; // J'initialise ma valeur
              for ($firstNumber = 0 ; $firstNumber < 20 ; $firstNumber++){ // On initalise la deuxième valeur et on lui informe que tant qu'elle est inférieure à 20, elle doit s'incrémenter
                echo '<p>' . $firstNumber * $secondNumber . '</p>'; // On affiche la multiplication de nos deux variables, avec les balises 'p' pour aller à la ligne à chaque fois.
              }
            ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
