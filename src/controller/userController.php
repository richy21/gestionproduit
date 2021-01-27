<?php
    session_start();
    require_once '../model/modelUser.php';
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
    if (isset($_GET['deconnexion']))
    {
        session_unset();
        $_SESSION = array();
        header('location:/mesprojets/gestionproduitmvc/');
    }
    if (isset($_POST['ajoutUser'])) {
        extract($_POST);
        if (strlen($mdp) < 8) {
            header('location:/mesprojets/gestionproduitmvc/newUserC');
        }
        else
        {
            $profil = "admin";
            if(insererUser($nom, $prenom, $login, password_hash($mdp, PASSWORD_DEFAULT), $profil) > 0)
            {
                header('location:/mesprojets/gestionproduitmvc/newUserS');
            }
            else
            {
                header('location:/mesprojets/gestionproduitmvc/newUserE');
            }
        }
    }
    if (isset($_POST['changeMdp'])) {
        extract($_POST);
        $ancienMdp = getPasswordById($_SESSION['idUser']);
        if (strlen($mdp) >= 8) {
            if(password_verify($mdp,$ancienMdp['password']))
            {
                header('location:/mesprojets/gestionproduitmvc/preAccueil.php?ok=0');
            }
            else
            {
                if(chamgeMdpById($_SESSION['idUser'], password_hash($mdp, PASSWORD_DEFAULT)) > 0)
                {
                    $user = getUserById($_SESSION['idUser']);
                    $_SESSION['profil'] = $user['profil'];
                    $_SESSION['nomComplet'] = $user['nom'].' '.$user['prenom'];
                    $_SESSION['idUser'] = $user['id'];
                    header('location:/mesprojets/gestionproduitmvc/accueil');

                }
                else
                {
                    header('location:/mesprojets/gestionproduitmvc/preAccueil.php?ok=0');
                }
            }
        }
        else
        {
            header('location:/mesprojets/gestionproduitmvc/preAccueil.php?court=0');
        }
    }
    
?>