<?php
    session_start();
    require_once '../model/modelProduit.php';
    if (isset($_POST['connexion']))
    {
        extract($_POST);
        $user = verifierConnexion($login, $mdp);
        if($user != null)
        {
            if($user['AlreadyLogIn'] == '1'){
                $_SESSION['profil'] = $user['profil'];
                $_SESSION['nomComplet'] = $user['nom'].' '.$user['prenom'];
                $_SESSION['idUser'] = $user['id'];
                header('location:/mesprojets/gestionproduitmvc/accueil');
            }
            else
            {
                $_SESSION['idUser'] = $user['id'];
                header('location:/mesprojets/gestionproduitmvc/preAccueil');
            }
        }
        else
        {
            //insererUser("AMAH", "Ulrich", "ulrich", password_hash("passer",PASSWORD_DEFAULT), "admin");
            header('location:/mesprojets/gestionproduitmvc/errorConnexion');
            return;
        }

    }
    if (isset($_POST['ajoutProduit'])) {
        extract($_POST);
        if(insererProduit($ref, $nom, $stock) > 0)
        {
            header('location:/mesprojets/gestionproduitmvc/newProductS');
        }
        else
        {
            header('location:/mesprojets/gestionproduitmvc/newProductE');
        }
    }
    
?>