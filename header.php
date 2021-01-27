<?php
  session_start();
  if(isset($_SESSION['nomComplet']))
  {
      header("location:/mesprojets/gestionproduitmvc/accueil");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>GESTION PRODUITS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="public/css/style1.css">
</head>
<body>
    