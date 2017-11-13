<?php
  session_start();
  include 'classes.php';
  $user = new user();
  $user->setUserMail($_POST['UserMailLogin']);
  $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
  if ($user->UserLogin()==true) {
    $_SESSION['UserId'] = $user->getUserId();
    echo $_SESSION['UserId'];
    $_SESSION['UserName'] = $user->getUserName();
    $_SESSION['UserMail'] = $user->getUserMail();
  }


  // if (isset($_POST['UserMailLogin'])&&isset($_POST['UserPasswordLogin'])) {
  //   $user = new user();
  //   $user->setUserMail($_POST['UserMailLogin']);
  //   $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
  //   $user->UserLogin();
  //
  //   // header("Location: ../index.php?success=1");
  // }






 ?>
