$('#retrait').fadeOut(0, function() {});
$(document).ready(function() {
    $('#searchCombi').click(function(event) {
        var mnt = $('#montantRetrait');
        if (mnt[0].value > 500) {
            setTimeout(function() {
                $('#retrait').fadeIn(1000, function() {});
                //console.log(mnt);
            }, 500);
        } else {
            //alert("MONTANT NON PRIS EN CHARGE");
        }
    });
    $('#vider').click(function() {
        if (confirm("ETES VOUS SUR DE VOULOIR VIDER LA TABLE??")) {
            window.location.href = "/mesprojets/gestionproduitmvc/delete";
        }
    })
})

function imprimer(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}