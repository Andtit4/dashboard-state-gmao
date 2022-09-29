<?php 
require('db.php');
$id_ticket = intval($_GET['id_ticket']);
$id_admin = intval($_GET['id_admin']);

// Admin information 
$req0 = $bdd -> query("SELECT * FROM admins WHERE id_admin = '$id_admin'");
$admin_info = $req0->fetch();

// Getting demande information
$req = $bdd -> query("SELECT * FROM demande WHERE id_ticket = '$id_ticket' ");
$ticket_info = $req->fetch();

$type = $ticket_info['type_demande'];
$site = $ticket_info['site_demande'];
$equipement = $ticket_info['equipement'];
$nombre = $ticket_info['nombre'];
$add_by = $admin_info['email']; 

$req1 = $bdd -> query("INSERT INTO traiter VALUES ('$id_ticket', '$site', '$type', '$equipement', '$nombre', '$add_by', '0', NOW() )");
$req2 = $bdd->query("DELETE FROM demande WHERE id_ticket = '$id_ticket'");

header("Location: ../dashboard.php?id_admin=".$id_admin);
?>