<?php
require('config/db.php');
$req1 = $bdd->query("SELECT * FROM site");
if (isset($_GET['id_admin'])) {
  $id_admin = intval($_GET['id_admin']);
  if (isset($_POST['ajouter'])) {
    if (!empty($_POST['siteid'] && $_POST['nom'] && $_POST['typologie'] && $_POST['classification'] && $_POST['zone'] && $_POST['distance'] && $_POST['sla'])) {
      $siteid = htmlspecialchars(strtoupper($_POST['siteid']));
      $nom = htmlspecialchars(strtoupper($_POST['nom']));
      $typologie = htmlspecialchars(strtoupper($_POST['typologie']));
      $classification = htmlspecialchars(strtoupper($_POST['classification']));
      $zone = htmlspecialchars(strtoupper($_POST['zone']));
      $distance = htmlspecialchars(strtoupper($_POST['distance']));
      $sla = htmlspecialchars(strtoupper($_POST['sla']));

      $req = $bdd->query("INSERT INTO site VALUES ('$siteid', '$nom', '$typologie', '$classification', '$zone', '$distance', '$sla')");
      header("Location: add_site.php?id_admin=" . $id_admin);
    } else {
      $message = "Veuillez remplir les champs";
    }
  }
} else {
  header("Location: index.php");
}

require('views/add_site.php');
