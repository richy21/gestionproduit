<?php
    include '../header.php';
    if (isset($_GET['ok'])) {
        if($_GET['ok'] == '0'){
            ?>
        <h1 class="display-6" align="center" style="color: red" >ACUNE COMBINAISON POSSIBLE POUR CE MONTANT</h1>
            <?php
        }
    }
?>
<br><br>
<h1 class="display-4" align="center" >EFFECTUER UN RETRAIT</h1>
<div class="blocUpdate">

<form method="POST" action="/mesprojets/gestionproduitmvc/adC">
    <input class="form-control mr-sm-2" id="montantRetrait" name="mnt" type="number" min="1000" placeholder="Montant" required>
    <br>
    <button class="btn btn-outline-success my-2 my-sm-0" name="retrait" id="searchCombi" type="submit">RECHERCHER LES COMBINAISONS</button>
</form>
<div class="item" id="retrait">
        <div class="spinner-grow" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    </div>
</div>
<?php
    include '../footer.php';
?>