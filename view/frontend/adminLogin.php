<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>adminLogin</title>
</head>

<body>
  <p>Veuillez indiquer votre mot de passe pour acceder à la page d'administration</p>
    <form action="adminView.php" method="post">
      <p>
        <label for="email">Adresse email</label><br>
        <input type="email" name="courriel"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" name="mot_de_passe"/><br>
        <input type="submit" value="Valider">
      </p>
    </form>
  
</body>
</html>





