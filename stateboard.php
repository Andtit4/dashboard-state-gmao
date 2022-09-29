<?php 
require('config/db/db.php');

$req = $bdd -> query("SELECT * FROM demande WHERE type_demande = 'HS' ORDER BY date_envoi ASC");

// Comptage de tous les demandes de site hors service
$req0 = $bdd -> query("SELECT * FROM demande WHERE type_demande = 'HS' ");
$req_count_all_hs = $req0 -> rowCount();
echo $req_count_all_hs;

// Joincture avec la table des sla
$req1 = $bdd -> query("SELECT *  FROM demande , site WHERE demande.type_demande = 'HS' AND demande.site_demande = site.nom ");
$nb_site_hs = $req1->rowCount();

$i = $req1->fetch();
$sla = intval($i['sla']);
echo $i['sla'];

include('views/stateboard.php');

?>