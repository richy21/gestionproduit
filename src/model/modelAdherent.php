<?php
    require_once 'bd.php';
    function insertAd($nom, $prenom, $mnt)
    {
        $id = lastInsertIdForTable("gestionproduitmvc");
        $sql = "INSERT INTO gestionproduitmvc VALUES($id, '$nom', '$prenom', $mnt, 1 ) ";
        global $bd;
        return $bd -> exec($sql);
    }
    function gaetAllgestionproduitmvc()
    {
        $sql = "SELECT * FROM gestionproduitmvc";
        global $bd;
        return $bd -> query($sql) -> fetchall();
    }
    function getgestionproduitmvcById($id)
    {
        $sql = "SELECT nom, prenom, montant FROM gestionproduitmvc WHERE id = $id";
        global $bd;
        $res = $bd -> query($sql) -> fetch();
        return $res['nom'].' '.$res['prenom'].' ('.$res['montant'].')';
    }
    function gaetAllMontant()
    {
        $sql = "SELECT montant FROM gestionproduitmvc";
        global $bd;
        return $bd -> query($sql) -> fetchall();
    }
    function changeEtat($id)
    {
        $sql = "SELECT etat FROM gestionproduitmvc WHERE id = $id ";
        global $bd;
        $etat = $bd -> query($sql) -> fetch();
        if($etat['etat'] == '1') $valeur = 0;
        else $valeur = 1;
        $sql = "UPDATE gestionproduitmvc SET etat = $valeur WHERE id = $id ";
        return $bd -> exec($sql);
    }
    function deletegestionproduitmvc($id)
    {
        $sql = "DELETE FROM gestionproduitmvc WHERE id = $id ";
        global $bd;
        return $bd -> exec($sql);
    }
    function updateAd($id, $mnt)
    {
        $sql = "UPDATE gestionproduitmvc SET montant = $mnt WHERE id = $id";
        global $bd;
        return $bd -> exec($sql);
    }
    function vider()
    {
        $sql = "DELETE FROM gestionproduitmvc";
        global $bd;
        return $bd -> exec($sql);
    }
?>