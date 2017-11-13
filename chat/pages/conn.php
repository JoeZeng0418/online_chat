<?php
  try {
    // $bdd = new PDO("mysql:host=192.185.4.114;dbname=shizeng_chat","shizeng","ZENGshi1998@@");
    $bdd = new PDO("mysql:host=127.0.0.1;dbname=shizeng_chat","root","123");
  } catch (Exception $e) {
    die("ERROR : ".$e->getMessage());
  }


?>
