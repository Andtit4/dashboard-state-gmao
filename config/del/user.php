<?php 
require('../db.php');
$id_user = intval($_GET['id_user']);
$id_admin = intval($_GET['id_admin']);

$req2 = $bdd->query("DELETE FROM users WHERE id_user = '$id_user'");

header("Location: ../../dashboard.php?id_admin=".$id_admin);
?>