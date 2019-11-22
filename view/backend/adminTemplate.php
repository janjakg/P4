

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link href="public/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">     
      <a class="nav-link" href="index.php?action=adminLogin">Login</a>
      </li> -->
          <li class="nav-item">
          <?php if (isset($_SESSION['pseudo'])): ?>          
            <a class="nav-link" href="index.php?action=adminLogout">Déconnexion</a>
          <?php else: ?>
            <a class="nav-link" href="index.php?action=adminLogin">Connexion</a>
          <?php endif; ?>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <?= $content ?>
  </div>
  <script src="public/js/signal.js"></script>
</body>

</html>