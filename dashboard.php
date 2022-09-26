<?php 
session_start();
require('config/db.php');

if (isset($_GET['id_admin'])){
    $id_admin = intval($_GET['id_admin']);

    //Caputre des nombres total d'utilisateurs 
    $req = $bdd -> query("SELECT * FROM users");
    $nb_users = $req->rowCount();

    // Nombre total de demandes traitées
    $req2 = $bdd -> query("SELECT * FROM traiter");
    $nb_demande_traiter = $req2->rowCount();

    // Nombre total de demandes en attente
    $req3 = $bdd -> query("SELECT * FROM demande");
    $nb_demande = $req3->rowCount();
    
    
}
else{
    header("Location: index.php");
}

require('views/index.php');
?>