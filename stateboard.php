<?php 
require('config/db/db.php');

$req = $bdd -> query("SELECT * FROM demande WHERE type_demande = 'HS' ORDER BY date_envoi ASC");

include('views/stateboard.php');

?>