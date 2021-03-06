<!DOCTYPE html>
<html lang="fr">
<!-- template crée pour la partie frontend -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link href="public/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" media="screen and (max-width:768px)" href="#">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/fa6a9c271b.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>

<body class="background2">

  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
<!--script php pour indiquer à l'utilisateur par une pilule verte qu'i est connecté -->
      <?php if (isset($_SESSION['pseudo'])) :?>
      <span class="badge badge-pill badge-success">connecté </span>
      <?php else :?>
      <p> </p>
      <?php endif;?>

      <a class="navbar-brand" href="index.php"><strong><em>Jean FORTEROCHE</em></strong></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <!-- l'élément li suivant sera utile si on veut mettre en place l'élément INSCRIPTION -->
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=adminRegistration"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=about"><i class="fas fa-info-circle"></i> A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=listPosts"><i class="fab fa-blogger"></i> Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=adminLogin"><i class="fas fa-user-lock"></i> Admin</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="page">
      <?= $content ?>
    </div>
  </div>

  <footer>
    <div class="container">
      Site réalisé par Jean-Jacques GOMIS dans le cadre de la formation OpenClassrooms. 2019
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>