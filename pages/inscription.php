<?php
//Inclusion de la connexion à la BD
  include '../database/dbconnect.php';
//enregistrement
  if (isset($_POST["envoyer"])) {
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    // $numero = addslashes($_POST['numero']);
    $password = md5(addslashes($_POST['password']));
    $cpassword = md5(addslashes($_POST['cpassword']));
    

    // $date_poste = date("m/y/d");

        //check user
        // $check = "SELECT * FROM utilisateur WHERE numero ='$numero'";
        // $result = mysqli_query($conn, $check);
        // $nombre = mysqli_num_rows($result);
        //a = 2
        //si a = 0 display 5 sinon display 4
        // echo $matricule . '-';
    //ajout d'image
    
  //   $target_dir = "donnee/";//dossier de reception
  //   $target_file = $target_dir . basename($_FILES["photo"]["name"]);
  //   $uploadOk = 1;
  //   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //   // Check if image file is a actual image or fake image
  //   //if(isset($_POST["submit"])) {
  //     $check = getimagesize($_FILES["photo"]["tmp_name"]);
  //     if($check !== false) {
  //       echo "Le fichier est une image - " . $check["mime"] . ".";
  //       $uploadOk = 1;
  //     } else {
  //       echo "Le fichier n’est pas une image.";
  //       $uploadOk = 0;
  //     }
  //   //renomer l'image
  //     $temp = explode(".", $_FILES["photo"]["name"]);
  //   $newfilename = round(microtime(true)) . '.' . end($temp);
  //   $finaldestination = $target_dir. $newfilename;
  //   //}
  //   // Check if $uploadOk is set to 0 by an error
  //   if ($uploadOk == 0) {
  //       echo "Désolé, votre fichier n’a pas été téléchargé.";
  //     // if everything is ok, try to upload file
  //     } else {
  //       if (move_uploaded_file($_FILES["photo"]["tmp_name"], "".$finaldestination)) {
  //         echo "Le fichier ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " a été téléchargé.";
  //       } else {
  //         echo "Désolé, une erreur s’est produite lors du téléchargement de votre fichier.";
  //       }
  // }
  if ($password == $cpassword) {
    //insertion 
    //'$numero' ,'$finaldestination',numero,photo,
    $sql = "INSERT INTO gerant (nom, prenom, motdepasse,date_poste) VALUES ('$nom','$prenom' ,'$password','$date_poste')";

    if (mysqli_query($conn, $sql)) {
      echo "Nouvel enregistrement créé avec succès";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "l'utilisateur existe";
  }
}
//fin enregistrement
mysqli_close($conn);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="/image/jpg" href="../image/fav-Lepoint.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>incription</title>
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
<div class="container-fluid ">
  <h3>Vous êtes sur le page de inscription.</h3>
  <p>Creer un compte pour faire partir de la  famille</p>
 </div>
<!-- formulaire d'inscrition  -->
<div class="container border justify-content-center">
        <h1>Inscription</h1>
        <form action="" method="POST"  enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="entrer votre nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="entrer votre prenom" name="prenom">
                </div>
            </div>
            <!-- <div class="form-row">-->
                <!-- <div class="form-group col-md-6"> -->
                <!-- <label for="password">numero</label>
                <input type="cel" class="form-control" id="numero" placeholder="entrer votre numéro"
                    name="numero">
               = </div> -->
            </div> 
            <div class="form-row">
                <!-- <div class="form-group col-md-6"> -->
                <label for="password">Mot de Passe</label>
                <input type="password" class="form-control" id="password" placeholder="entrer votre mot de passe"
                    name="password">
                <!-- </div> -->
            </div>
            <div class="form-row">
                <!-- <div class="form-group col-md-6"> -->
                <label for="password">confirmer le mot de Passe</label>
                <input type="password" class="form-control" id="password" placeholder="entrer votre mot de passe"
                    name="cpassword">
                <!-- </div> -->
            </div>

            <!-- <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" placeholder="ajouter une photo" name="photo">
            </div> -->
            <button type="submit" class="btn btn-primary mb-3" name="envoyer">inscrire</button>
        </form>
</div>

</body>
</html>