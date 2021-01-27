<?php
    // require_once '../../model/modelClient.php';
    // require_once '../../model/modelCompte.php';
    // $numC = genererNumero();
    // $numCli = genererNumeroCl();
    $numC = "";
    $numCli = "";
    include '../header.php';
    ?>

<br>
<h1 class="display-4" align="center" >NOUVEL gestionproduitmvc</h1>
<?php
    if (isset($_GET['ok'])) {
        echo $_GET['ok'];
        if($_GET['ok'] == '1'){
        ?>
        <h1 class="display-6" align="center" style="color: green" >gestionproduitmvc AJOUTE AVEC SUCCES</h1>
        <?php
        }
        else{
            ?>
        <h1 class="display-6" align="center" style="color: red" >ECHEC D'AJOUT</h1>
            <?php
        }
    }
?>
<br>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<form method="POST" action="/mesprojets/gestionproduitmvc/adC">
    
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nom" class="form-control" placeholder="Nom" type="text" required>
    </div> 
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="prenom" class="form-control" placeholder="Prenom" type="text" required>
    </div>
    <div style="width: 350px;"></div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
		</div>
        <input name="mnt" class="form-control" placeholder="Montant" type="number" min="500" required>
    </div> <!-- form-group// -->
     <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="ajoutAd" class="btn btn-success btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
   
</form>
</article>
<br>
</div> <!-- card.// -->




</div> 
<!--container end.//-->


<?php
    include '../footer.php';