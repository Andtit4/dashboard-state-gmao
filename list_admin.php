<?php
require('config/db.php');
if (isset($_GET['id_admin'])){
    $id_admin = intval($_GET['id_admin']);
    $req = $bdd -> query("SELECT * FROM admins");

}else{
    header("Location: index.php");
}

require('views/list_admin.php');

?>