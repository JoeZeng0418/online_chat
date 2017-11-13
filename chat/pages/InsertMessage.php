<?php
  session_start();
  include "classes.php";
  if (isset($_POST['ChatText'])&&trim($_POST['ChatText'])!="") {
    //user typed the concrete strings
    $chat = new chat();
    $chat->setChatUserId($_SESSION['UserId']);
    $chat->setChatText($_POST['ChatText']);
    $chat->InsertChatMessage();
  }



 ?>
