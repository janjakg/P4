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
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>

<body class="background">
  <nav>
    <div class="header">
      <?php if (isset($_SESSION['pseudo'])) :?>
      <span class="badge badge-pill badge-success">connecté </span>
      <?php else :?>
      <p> </p>
      <?php endif;?>

      <a class="logo" href="index.php"><strong><em>Jean FORTEROCHE</em></strong></a>

      <input type="checkbox" id="chk">
      <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
      </label>

      <ul class="menu">
        <a href="index.php"><i class="fas fa-home"></i>Accueil</a>
        <a href="index.php?action=listPosts"><i class="fab fa-blogger"></i>blog</a>
        <?php if (isset($_SESSION['pseudo'])): ?>
        <a href="index.php?action=adminLogout"><i class="fas fa-sign-out-alt"></i>Déconnexion</a>
        <?php else: ?>
        <a href="#index.php?action=adminLogin"><i class="fas fa-sign-in-alt"></i>Connexion</a>
        <?php endif; ?>
        <label for="chk" class="hide-menu-btn">
          <i class="fas fa-times"></i>
        </label>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="text-center">
      <img src="public/images/town" class="img-fluid" alt="Responsive image"></div>
    <?= $content ?>
  </div>

  <footer>
    Site réalisé par Jean-Jacques dans le cadre de la formation OpenClassrooms. 2019
  </footer>

</body>

</html>