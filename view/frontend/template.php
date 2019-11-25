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
  <script src="https://kit.fontawesome.com/fa6a9c271b.js" crossorigin="anonymous"></script>
</head>

<body class="background">

  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">

      <?php if (isset($_SESSION['pseudo'])) :?>
      <span class="badge badge-pill badge-success">connecté </span>
      <?php else :?>
      <p> </p>
      <?php endif;?>

      <a class="navbar-brand" href="index.php"><strong><em>Jean FORTEROCHE</em></strong></a>
      <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Accueil</a>
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
            <a class="nav-link" href="index.php?action=adminLogin"><i class="fas fa-user-lock"></i> Admin</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
  <img src="public/images/boreal" class="img-fluid" alt="Responsive image">
    <?= $content ?>
  </div>
  <footer>
    Site réalisé par Jean-Jacques dans le cadre de la formation OpenClassrooms. 2019
  </footer>
  <script src="public/js/signal.js"></script>
</body>

</html>