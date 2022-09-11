<?php 
require('./config/db/db.php');

$req = $bdd -> query("SELECT * FROM demande ORDER BY date_envoi ASC");


include('views/index.html');

?>