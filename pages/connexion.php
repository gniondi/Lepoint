<?php
//Inclusion de la connexion à la BD
include '../database/dbconnect.php';

session_start();

if(isset($_POST['login'])) {
  $nom = $_POST['nom'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM gerant WHERE nom ='$nom' AND motdepasse= '$password'";
  $result= mysqli_query($conn, $sql);
  $nombre = mysqli_num_rows($result);
  if($nombre == 1){
    // $row = mysql_fetch_assoc($result);
    $id = $row['id'];
    $_SESSION["id"] = $id;
    header('Location: benefice.php');
  }
  else{
    
    echo "<script>alert('nom ou mot de pass incorrect')</script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="/image/jpg" href="../image/fav-Lepoint.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/page.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Connection</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Lepoint</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../pages/connexion.php">connection</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../pages/inscription.php">inscription</a>
    </li>
   
  </ul>
</nav>

<div class="container-fluid">
  <h3>Vous êtes sur le page de connection.</h3>
  <p>Connecter vous pour une commencer une nouvelle journée</p>
</div>
<img src="" alt="">
<div class="container border ">
<h1>login</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nom">nom</label>
                <input type="text" class="form-control" id="nom" placeholder="entrer votre nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="password">mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="entrer votre mot de passe"
                    name="password">
            </div>

            <button type="submit" class="btn btn-primary mb-3" name="login">login</button>

        </form>
</div>
</body>
</html>