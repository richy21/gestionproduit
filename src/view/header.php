<?php
  session_start();
  if(!isset($_SESSION['nomComplet']))
  {
      header("location:/mesprojets/gestionproduitmvc/");
  }
?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
  <title>GESTION PRODUITS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="public/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style2.css">
</head>
<body style="background-color: #dfdfdf" id="body">
<div class="preloader" id="preloader">
    <div class="item">
        <div class="spinner-grow" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    </div>
</div> 
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="/mesprojets/gestionproduitmvc/accueil" style="margin-left: 50px">GESTION PRODUITS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" style="margin-left: 50px">
        <a class="nav-link dropdown-toggle text-white" style="font-size: 18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MES PRODUITS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/mesprojets/gestionproduitmvc/newProduct">Nouveau produit</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/mesprojets/gestionproduitmvc/listProducts">Listes des produits</a>
        </div>
      </li>
      <!-- <li class="nav-item dropdown" style="margin-left: 50px">
        <a class="nav-link dropdown-toggle text-white" style="font-size: 18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GESTION DES gestionproduitmvcS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/mesprojets/gestionproduitmvc/newAd">Nouvel gestionproduitmvc</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/mesprojets/gestionproduitmvc/listAd">Listes des gestionproduitmvcs</a>
        </div>
      </li> -->
      <li class="nav-item dropdown" style="margin-left: 50px">
        <a class="nav-link dropdown-toggle text-white" style="font-size: 18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GESTION DES USERS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/mesprojets/gestionproduitmvc/newUser">Nouveau utilisateur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/mesprojets/gestionproduitmvc/listeUser">Liste des utilisateurs</a>
        </div>
      </li>
      <!-- <li class="nav-item" style="margin-left: 50px">
        <a class="nav-link text-white" style="font-size: 18px" href="/mesprojets/gestionproduitmvc/retrait">NOUVEAU RETRANCHEMENT</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" style="font-size: 18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
        <a href="/mesprojets/gestionproduitmvc/deconnexion"><button class="btn btn-outline-danger items-align-end">DECONNEXION</button></a>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div id="pageElleMeme">