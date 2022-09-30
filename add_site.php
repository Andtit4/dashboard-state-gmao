<?php
require('config/db.php');
$req1 = $bdd->query("SELECT * FROM site");
if (isset($_GET['id_admin'])) {
  $id_admin = intval($_GET['id_admin']);
  if (isset($_POST['ajouter'])) {
    if (!empty($_POST['siteid'] && $_POST['nom'] && $_POST['typologie'] && $_POST['classification'] && $_POST['zone'] && $_POST['de'] && $_POST['a'] && $_POST['sla-de'] && $_POST['sla-a'])) {
      $siteid = strtoupper(($_POST['siteid']));
      $nom = strtoupper(($_POST['nom']));
      $typologie = strtoupper(($_POST['typologie']));
      $classification = strtoupper(($_POST['classification']));
      $zone = strtoupper(($_POST['zone']));
      $sla_de = intval(($_POST['sla-de']));
      $sla_a = intval(($_POST['sla-a']));

      // Calcul du sla
      $sla = intval(($sla_a  + $sla_de)/2);
      $de = intval($_POST['de']);
      $a = intval($_POST['a']);

      // Calacul de la distance
      $distance =  intval(($a + $b)/2);

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
