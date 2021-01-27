$(document).ready(function() {

    $('.bloquerAct').click(function(event) {
        var btnClick = $(event.target).closest('button');
        var idB = $(btnClick).attr('idB');
        var idA = $(btnClick).attr('idA');
        var tr = $(btnClick).closest('tr');
        var td = tr.children();
        if (idA) {
            btn2 = td.last().children().first();
            console.log(btn2);
            setTimeout(function() {
                var rep = confirm("VOULEZ VOUS REELEMENT ACTIVER CET gestionproduitmvc ?? ");
                if (rep) {
                    $.ajax({
                        url: '/mesprojets/gestionproduitmvc/public/ajax/adController.php',
                        type: 'GET',
                        data: { id: idA },
                        success: function(data) {
                            if (data == 1) {
                                tr.css("backgroundColor", "rgba(0, 0, 0, 0.05)");
                                btnClick.attr('disabled', '');
                                btn2.removeAttr('disabled');
                            }
                        }
                    })
                } else {}
            }, 300);
            //alert("ACTIVER LE COMPTE");
        }
        if (idB) {
            var btn2 = td.last().children().last();
            console.log(btn2[0]);
            setTimeout(function() {
                var rep = confirm("VOULEZ VOUS REELEMENT BLOQUER CE gestionproduitmvc ?? ");
                if (rep) {
                    $.ajax({
                        url: '/mesprojets/gestionproduitmvc/public/ajax/adController.php',
                        type: 'GET',
                        data: { id: idB },
                        success: function(data) {
                            if (data == 1) {
                                tr.css("backgroundColor", "rgba(255, 0, 0, 0.3)");
                                btnClick.attr('disabled', '');
                                btn2.removeAttr('disabled');
                            }
                        }
                    })
                } else {}
            }, 300);

            //alert("BLOQUER LE COMPTE");
        }
    })

    $('.delCompte').click(function(event) {
        var btnClick = $(event.target).closest('button');
        var id = $(btnClick).attr('idS');
        console.log(id);
        var tr = $(btnClick).closest('tr');
        tr.css('background-color', 'rgba(255, 0, 0, 0.3)')
        setTimeout(function() {
            var rep = confirm("VOULEZ VOUS REELLEMENT SUPPRIMER CE gestionproduitmvc ?? ");
            if (rep) {
                $.ajax({
                    url: '/mesprojets/gestionproduitmvc/public/ajax/adController.php',
                    type: 'GET',
                    data: { del: id },
                    success: function(data) {
                        if (data != 0) {
                            tr.fadeOut(1600, function() {});
                        } else {
                            alert("CE COMPTE EST LE SEUL DU CLIENT!!\n VEUILLEZ DONC ALLER SUPPRIMER LE CLIENT...");
                            tr.css('background-color', 'rgba(0, 0, 0, 0.3)');
                        }
                    }
                })
            } else {
                tr.css('background-color', 'rgba(0, 0, 0, 0.3)');
            }
        }, 500);
    })
    $('.updateAd').click(function(event) {
        var btnClick = $(event.target).closest('button');
        var id = $(btnClick).attr('idM');
        //console.log(id);
        var tr = $(btnClick).closest('tr');
        tr.css('background-color', 'rgba(0, 0, 255, 0.3)')
        setTimeout(function() {
            var rep = confirm("VOULEZ VOUS REELLEMENT MODIFIER CE gestionproduitmvc ?? ");
            if (rep) {
                let solde = 0;
                solde = parseInt(prompt("VEUILLEZ SAISIR LE NOUVEAU SOLDE : "), 10);
                // alert(typeof(solde));
                // alert(solde);
                if (typeof(solde) === 'number' && solde > 500) {
                    $.ajax({
                            url: '/mesprojets/gestionproduitmvc/public/ajax/adController.php',
                            type: 'GET',
                            data: { update: id, mnt: solde },
                            success: function(data) {
                                //console.log(data);
                                if (data != 0) {
                                    $(tr).children('#montant')[0].textContent = solde + " FCFA";
                                    tr.css('background-color', '#d4d4d4');
                                    //tr.fadeOut(1600, function() {});
                                } else {
                                    alert("ERREUR DE MODIFICATION...");
                                    tr.css('background-color', '#d4d4d4');
                                }
                            }
                        })
                        //console.log($(tr).children('#montant')[0].textContent);
                } else {
                    alert("MONTANT NON PRIS EN CHARGE")
                    tr.css('background-color', '#d4d4d4');
                }
            } else {
                tr.css('background-color', '#d4d4d4');
            }
        }, 500);
    })
})