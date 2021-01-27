<?php

    require_once '../../model/modelProduit.php';
    //$comptes = getAllCompteAvecClients();
    $produits = getProduits();
    include '../header.php';
    ?>
<br>
<h1 class="display-4" style="margin-left:15px">LISTE DES PRODUITS</h1>

<div class="content" id="ajax-content">
    <table class="table table-striped table-responsive-md btn-table">

    <thead>
    <tr>
        <th>#</th>
        <th>REF</th>
        <th>NOM</th>
        <th>STOCK</th>
        <th>ACTIONS</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $i = 0;
      foreach ($produits as $key => $p) { 
        $i++;
        ?>
        <tr>
        <th scope="row"><?= $i ?></th>
        <td><?= $p['ref'] ?></td>
        <td><?= $p['nom'] ?></td>
        <td><?= $p['stock'] ?></td>
        <td>
        <button class="btn btn-danger"> SUPPRIMER </button>
        <button class="btn btn-primary"> MODIFIER </button>
        </td>
    </tr>
      <?php }
    ?>
    </tbody>

    </table>
    <br><br>
</div>

<?php
    include '../footer.php';