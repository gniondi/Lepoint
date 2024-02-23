<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lepoint</title>
  <link rel="shortcut icon" type="/image/jpg" href="../image/fav-Lepoint.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link href="../style/page.css">
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

<div class="container-fluid justify-content-center">
  
  <?php echo 'Bienvenu sur le site le point' . $_SESSION['nom'];  ?>
</div>

</body>
<!-- Footer -->
<!-- <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <!--<div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="/"> MDBootstrap.com</a>
  </div> -->
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
