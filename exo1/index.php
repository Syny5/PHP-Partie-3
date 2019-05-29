<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 3 - Exercice 1</h1>
                <p class="lead">Créer une variable et l'initialiser à 0.
                  Tant que cette variable n'atteint pas 10, il faut :

                  l'afficher
                  l'incrementer</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
            $repetitions = 0; // J'initialise ma boucle

            while($repetions < 10){
              echo '<p>Sale petit malotru.</p>';
              $repetions++;
            }
            // Je lui dis "Tant que tu n'atteins pas 10, répète l'action. J'obtiens ainsi ce texte 10 fois."
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
