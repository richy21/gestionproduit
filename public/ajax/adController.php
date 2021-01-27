<?php
session_start();
    require_once '../../src/model/modelgestionproduitmvc.php';
    if (isset($_GET['id'])) {
        $res =  changeEtat($_GET['id']);
        echo $res;
    }
    if(isset($_GET['del'])){
        $res = deletegestionproduitmvc($_GET['del']);
        echo $res;
    }
    if( isset($_GET['update']) ){
        $res = updateAd($_GET['update'], $_GET['mnt']);
        echo $res;
    }