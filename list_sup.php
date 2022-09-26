<?php
require('config/db.php');
if (isset($_GET['id_admin'])){
    $id_admin = intval($_GET['id_admin']);
    $req = $bdd -> query("SELECT * FROM superviseur");

}else{
    header("Location: index.php");
}

require('views/list_sup.php');

?>