<?php
  include 'conn.php';
  $res = $bdd->prepare("SELECT COUNT(*) FROM chats");
  $res->execute();
  $num_rows = $res->fetchColumn();
  echo $num_rows;
?>
