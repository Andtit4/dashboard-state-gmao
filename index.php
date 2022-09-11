<?php 
require('./config/db/db.php');

$req = $bdd -> query("SELECT * FROM demande ORDER BY date_envoi ASC");

$now = date("H:i:s");
echo $now;

include('views/index.html');

?>