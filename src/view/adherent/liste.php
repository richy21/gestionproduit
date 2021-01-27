<?php

    require_once '../../model/modelgestionproduitmvc.php';
    //$comptes = getAllCompteAvecClients();
    $gestionproduitmvcs = gaetAllgestionproduitmvc();
    include '../header.php';
    ?>
<br>
<h1 class="display-4" style="margin-left:15px">LISTE DES gestionproduitmvcS</h1>
<a href="/mesprojets/gestionproduitmvc/newAd"><button type="button" class="btn btn-outline-primary float-right newBtn" style="margin-top: -60px; margin-right: 15px">NOUVEL gestionproduitmvc</button></a>
<br>
<div class="content" id="ajax-content">
    <table class="table table-striped table-responsive-md btn-table">

    <thead>
    <tr>
        <th>#</th>
        <th>NUM</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>MONTANT</th>
        <th>ACTIONS</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $i = 0;
      foreach ($gestionproduitmvcs as $key => $c) { 
        $i++;
        ?>
        <tr <?php if ($c['etat'] == 0) {
          echo 'style="background-color: rgba(255, 0, 0, 0.3)"';
        }?>
        >
        <th scope="row"><?= $i ?></th>
        <td>@NUM<?= $i ?></td>
        <td><?= $c['nom'] ?></td>
        <td><?= $c['prenom'] ?></td>
        <td id="montant"><?= $c['montant'] ?> FCFA</td>
        <td>
        <button class="btn btn-outline-danger bloquerAct" idB="<?= $c['id'] ?>" <?php if($c['etat'] != '1') echo 'disabled=""' ?>>BLOQUER</button>
        <button class="btn btn-danger delCompte" idS="<?= $c['id'] ?>" > SUPPRIMER </button>
        <button class="btn btn-primary updateAd" idM="<?= $c['id'] ?>" > MODIFIER </button>
        <button class="btn btn-outline-success bloquerAct" idA="<?= $c['id'] ?>" <?php if($c['etat'] == '1') echo 'disabled=""' ?>> ACTIVER </button>
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