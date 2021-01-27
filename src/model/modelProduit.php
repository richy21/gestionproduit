<?php
    require_once 'bd.php';

    function insererProduit($ref, $nom, $stock)
    {
    	$id = lastInsertIdForTable('produit');
    	$sql = "INSERT INTO produit VALUES('$id', '$ref', '$nom', '$stock')";
    	global $bd;
    	return $bd -> exec($sql);
    }
    function getProduitById($id)
    {
        $sql = "SELECT * FROM produit WHERE id = '$id' ";
        global $bd;
        return $bd -> query($sql) -> fetch();
    }
    function getProduits()
    {
        $sql = "SELECT * FROM produit ";
        global $bd;
        return $bd -> query($sql) -> fetchall();
    }
?>