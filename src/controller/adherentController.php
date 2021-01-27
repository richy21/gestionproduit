<?php
    include '../view/header.php';
    require_once '../model/modelgestionproduitmvc.php';
    if (isset($_POST['ajoutAd'])) {
        var_dump($_POST);
        extract($_POST);
        if(insertAd($nom, $prenom, $mnt) > 0)
        {
            header('location:/mesprojets/gestionproduitmvc/newAdS');
        }
        else
        {
            header('location:/mesprojets/gestionproduitmvc/newAdE');
        }
    }
    if(isset($_POST['retrait']))
    {
        //var_dump($_POST);
        extract($_POST);
        $cas = array();
        $tab = gaetAllgestionproduitmvc();
        foreach ($tab as $key => $value) {
            // echo $value[0].'<br>';
            $cas[] = $value['montant'];
        }

        //var_dump($cas);
        $combinaisons = array();
        $trouve = false;
        $find = false;
        echo '<br><br>';
        // CAS 1
        for ($i=0; $i < count($cas); $i++) { 
            if($cas[$i] == $mnt)
            {
                array_push($combinaisons,array($tab[$i]['id']));
                $find = true;
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                    $reponse = $cas[$i]+$cas[$j];
                    if($reponse == $mnt)
                    {
                        array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id']));
                        $find = true;
                    }
                }
            }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    $reponse = $cas[$i]+$cas[$j]+$cas[$k];
                    if($reponse == $mnt)
                    {
                        array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id']));
                        //echo $tab[$i]['nom'].' '.$tab[$i]['prenom'].' , '.$tab[$j]['nom'].' '.$tab[$j]['prenom'].','.$tab[$k]['nom'].' '.$tab[$k]['prenom'].'<br>';
                        $find = true;
                    }
                }
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    for ($l=$k+1; $l < count($cas); $l++) { 
                        $reponse = $cas[$i]+$cas[$j]+$cas[$k]+$cas[$l];
                        if($reponse == $mnt)
                        {
                            array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id'], $tab[$l]['id']));
                            //echo $tab[$i]['nom'].' '.$tab[$i]['prenom'].' , '.$tab[$j]['nom'].' '.$tab[$j]['prenom'].','.$tab[$k]['nom'].' '.$tab[$k]['prenom'].'<br>';
                            $find = true;
                        }
                    }                        
                }
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    for ($l=$k+1; $l < count($cas); $l++) { 
                        for ($m=$l+1; $m < count($cas); $m++) { 
                            $reponse = $cas[$i]+$cas[$j]+$cas[$k]+$cas[$l]+$cas[$m];
                            if($reponse == $mnt)
                            {
                                array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id'], $tab[$l]['id'], $tab[$m]['id']));
                                $find = true;
                            }
                        }
                    }                        
                }
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    for ($l=$k+1; $l < count($cas); $l++) { 
                        for ($m=$l+1; $m < count($cas); $m++) {
                            for ($n=$m+1; $n < count($cas); $n++) { 
                                $reponse = $cas[$i]+$cas[$j]+$cas[$k]+$cas[$l]+$cas[$m]+$cas[$n];
                                if($reponse == $mnt)
                                {
                                    array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id'], $tab[$l]['id'], $tab[$m]['id'], $tab[$n]['id']));
                                    $find = true;
                                }
                            } 
                            
                        }
                    }                        
                }
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    for ($l=$k+1; $l < count($cas); $l++) { 
                        for ($m=$l+1; $m < count($cas); $m++) {
                            for ($n=$m+1; $n < count($cas); $n++) { 
                                for ($o=$n+1; $o < count($cas); $o++) { 
                                    $reponse = $cas[$i]+$cas[$j]+$cas[$k]+$cas[$l]+$cas[$m]+$cas[$n]+$cas[$o];
                                    if($reponse == $mnt)
                                    {
                                        array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id'], $tab[$l]['id'], $tab[$m]['id'], $tab[$n]['id'], $tab[$o]['id']));
                                        $find = true;
                                    }
                                }
                            } 
                            
                        }
                    }                        
                }
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    for ($l=$k+1; $l < count($cas); $l++) { 
                        for ($m=$l+1; $m < count($cas); $m++) {
                            for ($n=$m+1; $n < count($cas); $n++) { 
                                for ($o=$n+1; $o < count($cas); $o++) { 
                                    for ($p=$o+1; $p < count($cas); $p++) { 
                                        $reponse = $cas[$i]+$cas[$j]+$cas[$k]+$cas[$l]+$cas[$m]+$cas[$n]+$cas[$o]+$cas[$p];
                                        if($reponse == $mnt)
                                        {
                                            array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id'], $tab[$l]['id'], $tab[$m]['id'], $tab[$n]['id'], $tab[$o]['id'], $tab[$p]['id']));
                                            $find = true;
                                        }
                                    }
                                }
                            } 
                            
                        }
                    }                        
                }
            }
        }
        for ($i=0; $i < count($cas); $i++) { 
            for ($j=$i+1; $j < count($cas); $j++) { 
                for ($k=$j+1; $k < count($cas); $k++) { 
                    for ($l=$k+1; $l < count($cas); $l++) { 
                        for ($m=$l+1; $m < count($cas); $m++) {
                            for ($n=$m+1; $n < count($cas); $n++) { 
                                for ($o=$n+1; $o < count($cas); $o++) { 
                                    for ($p=$o+1; $p < count($cas); $p++) {
                                        for ($q=$p+1; $q < count($cas); $q++) { 
                                            $reponse = $cas[$i]+$cas[$j]+$cas[$k]+$cas[$l]+$cas[$m]+$cas[$n]+$cas[$o]+$cas[$p]+$cas[$q];
                                            if($reponse == $mnt)
                                            {
                                                array_push($combinaisons, array($tab[$i]['id'], $tab[$j]['id'], $tab[$k]['id'], $tab[$l]['id'], $tab[$m]['id'], $tab[$n]['id'], $tab[$o]['id'], $tab[$p]['id'], $tab[$q]['id']));
                                                $find = true;
                                            }
                                        } 
                                    }
                                }
                            } 
                            
                        }
                    }                        
                }
            }
        }
        if($find == false) header('location:/mesprojets/gestionproduitmvc/retraitE');
        else{
            // $_SESSION['combinaisons'] = $combinaisons;
            // var_dump($_SESSION['combinaisons']);
            // die();
            // header('location:/mesprojets/gestionproduitmvc/retrait');
            ?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Combinaisons possibles</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i = 0;
      foreach ($combinaisons as $key => $combi) {
          $i++;
          ?>
        <tr>
            <th scope="row"><?= $i ?></th>
            <td>
                <?php
                    foreach ($combi as $key1 => $val) {
                        echo getgestionproduitmvcById($val).' |||   ';
                    }
                ?>
            </td>
        </tr>
          <?php
      }
    ?>
    </tbody>
</table>
    <br><br>
   <div style="text-align: center"><button class="btn btn-primary" onClick="imprimer('body')">ENREGISTRER CES COMBINAISONS</button></div>
    
   <br><br>
   <?php
        }
    }

    if(isset($_GET['vider']))
    {
        vider();
        header('location:/mesprojets/gestionproduitmvc/listAd');
    }
    include '../view/footer.php';