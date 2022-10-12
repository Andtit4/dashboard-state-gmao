<?php 
require('config/db/db.php');
$now = new DateTime();
$today = date("Y-m-d");
echo $today;

$req = $bdd -> query("SELECT * FROM demande WHERE type_demande = 'HS' ORDER BY date_envoi ASC");

// Liste de toutes les demandes HS
$req_all_demande = $bdd -> query("SELECT * FROM traiter WHERE type_demande = 'HS'");
$nb_all_demand = $req_all_demande->rowCount();

// Comptage de tous les demandes de site hors service
$req0 = $bdd -> query("SELECT * FROM demande WHERE type_demande = 'HS' and date_env =  '$today'");
$nb_site_all_hs = $req0 -> rowCount();
// echo $nb_site_all_hs;

// Joincture avec la table des sla
$req1 = $bdd -> query("SELECT *  FROM demande , site WHERE demande.type_demande = 'HS' AND demande.site_demande = site.nom ");
$nb_site_hs = $req1->rowCount();

$i = $req1->fetch();
// $sla = intval($i['sla']);
// echo $i['date_envoi'];
// $date = htmlspecialchars($i['date_envoi']);
// $date1 = new DateTime($date);

$req2 = $bdd -> query("SELECT * FROM traiter WHERE type_demande = 'HS' and date_envoi = '$today'");
$nb_site_all_traiter = $req2->rowCount();

$data_entry_day_circle = array(
    array("label" => "Demandes en cours", "y" => $nb_site_all_hs),
    array("label" => "Demandes traitées", "y" => $nb_all_demand),

);


// Cammamber de la zone lomé
/*  $req4 = $bdd -> query("SELECT zone.site, id_ticket.traiter,  FROM demande, site, traiter WHERE demande.type_demande = 'HS' AND site.zone = 'LOME' ");
$data_entry_day_circle_zone_lome = array();  */

include('views/stateboard.php');

?>